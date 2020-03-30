<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prcCharaExtract;
use App\prcCharaRepack;
use Illuminate\Support\Facades\Storage;

class prcController extends Controller
{
    public function StoreCharaPrc(Request $request)
    {
        $prcCharaExtract = new prcCharaExtract;

        $file = $request->file('fileInput');

        $prcCharaExtract->file = $file->getClientOriginalName();

        $prcCharaExtract->save();

        $path_tmp = $file->storeAs('public/prc/Chara/extract/input/' . $prcCharaExtract->id, $prcCharaExtract->file);

        $path = str_replace("public", "storage", $path_tmp);

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -d {$path} -o %CD%/storage/prc/Chara/extract/output/{$prcCharaExtract->id}/ui_chara_db.json -l %CD%/convert/ParamLabels.csv");

        return redirect("/prc/Chara/{$prcCharaExtract->id}");
    }

    public function GetJSON($id)
    {
        // $file = fopen(public_path("/storage/prc/Chara/extract/output/{$id}/ui_chara_db.json"), "r");

        $jsonText = file_get_contents(public_path("/storage/prc/Chara/extract/output/{$id}/ui_chara_db.json"));

        // while (!feof($file)) {
        //     $jsonText = $jsonText . fgets($file);
        // }

        // fclose($file);

        return $jsonText;
    }

    public function JSONtoCharaPrc(Request $request)
    {
        $prcRepack = new prcCharaRepack();

        $prcRepack->save();

        Storage::put("/public/prc/Chara/repack/input/{$prcRepack->id}/{$prcRepack->id}.json", $request->input("json"));

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -a \"%CD%/storage/prc/Chara/repack/input/{$prcRepack->id}/{$prcRepack->id}.json\" -o %CD%/storage/prc/Chara/repack/output/{$prcRepack->id}/ui_chara_db.prc -l %CD%/convert/ParamLabels.csv");

        return redirect("/storage/prc/Chara/repack/output/{$prcRepack->id}/ui_chara_db.prc");
    }
}
