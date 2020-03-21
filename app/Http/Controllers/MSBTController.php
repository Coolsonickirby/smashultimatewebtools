<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msbtExtract;
use App\msbtRepack;
use Illuminate\Support\Facades\Storage;

class MSBTController extends Controller
{
    public function StoreMSBT(Request $request){
        $msbt = new msbtExtract;

        $file = $request->file('fileInput');

        $msbt->file = $file->getClientOriginalName();

        $msbt->save();

        $path_tmp = $file->storeAs('public/msbt/ogMSBT/' . $msbt->id, extraController::keep_english($file->getClientOriginalName()));

        $path = str_replace("public", "storage", $path_tmp);

        shell_exec("%CD%/convert/MSBTEditorCli/MSBTEditorCli.exe \"%CD%/{$path}\" \"%CD%/storage/msbt/jsonMSBT/{$msbt->id}/{$msbt->id}.json\"");

        return redirect("/msbt/{$msbt->id}");
    }

    public function GetJSON($id){
        $file = fopen(public_path("/storage/msbt/jsonMSBT/{$id}/{$id}.json"), "r");

        $jsonText = "";

        while (!feof($file)) {
            $jsonText = $jsonText . fgets($file);
        }

        fclose($file);

        return $jsonText;
    }

    public function JSONtoMSBT(Request $request){
        $msbt = new msbtRepack();

        $msbt->save();

        Storage::put("/public/msbt/msbtJSON/{$msbt->id}/{$msbt->id}.json", $request->input("json"));

        shell_exec("%CD%/convert/MSBTEditorCli/MSBTEditorCli.exe \"%CD%/storage/msbt/msbtJSON/{$msbt->id}/{$msbt->id}.json\" \"%CD%/storage/msbt/outMSBT/{$msbt->id}/{$msbt->id}.msbt\"");

        return redirect("/storage/msbt/outMSBT/{$msbt->id}/{$msbt->id}.msbt");
    }
}
