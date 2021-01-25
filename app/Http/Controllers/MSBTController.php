<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSBT\msbtExtract;
use App\Models\MSBT\msbtRepack;
use App\Models\MSBT\msbtUpdater;
use Illuminate\Support\Facades\Storage;
use File;

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

    public function UpdateMSBT(Request $request){
        // return $request;
        $request->validate([
            'modded_file' => 'required',
            'type_of_update' => 'required|in:msg_bgm,msg_name,other',
        ]);

        if($request->input("select_type") == "other" && !$request->hasFile("updated_file")){
            return redirect()->back()->with("error", "Other type was selected but no file was uploaded!");
        }

        $msbt = new msbtUpdater();

        $msbt->type_of_update = $request->input("type_of_update");

        $msbt->og_file_name = "";
        $msbt->modded_file_name = "";

        $msbt->save();

        $file = $request->file('modded_file');

        $clean_filename = extraController::keep_english($file->getClientOriginalName());

        $modded_path = $file->storeAs('public/msbt/beforeUpdate/' . $msbt->id, $clean_filename);

        $modded_path = str_replace("public", "storage", $modded_path);

        $updated_msbt = "";
        $clean_filename_updated = "";

        if($msbt->type_of_update == "other"){
            $clean_msbt_file = $request->file('updated_file');

            $clean_filename_updated = extraController::keep_english($clean_msbt_file->getClientOriginalName());

            $updated_msbt = $clean_msbt_file->storeAs('public/msbt/beforeUpdate/' . $msbt->id, "clean.msbt");

            $updated_msbt = str_replace("public", "storage", $updated_msbt);
        }else{
            $updated_msbt = public_path() . "/convert/defaults/MSBT/{$msbt->type_of_update}.msbt";
            $clean_filename_updated = "{$msbt->type_of_update}.msbt";
        }

        $msbt->og_file_name = $file->getClientOriginalName();
        $msbt->modded_file_name = $clean_filename_updated;
        $msbt->save();

        $outFolder = public_path() . "/storage/msbt/afterUpdate/{$msbt->id}/";

        File::MakeDirectory($outFolder, 0777, true, true);

        $generate_xmsbt = shell_exec("\"%CD%/convert/XMSBT_cli/XMSBT_cli.exe\" \"%CD%/{$modded_path}\" \"{$outFolder}/out.xmsbt\"");

        File::copy($updated_msbt, "{$outFolder}/{$clean_filename_updated}");

        $apply_xmsbt = shell_exec("\"%CD%/convert/XMSBT_cli/XMSBT_cli.exe\" \"{$outFolder}/out.xmsbt\" \"{$outFolder}/{$clean_filename_updated}\"");

        return redirect("/storage/msbt/afterUpdate/{$msbt->id}/{$clean_filename_updated}");
    }
}
