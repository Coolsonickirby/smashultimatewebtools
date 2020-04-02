<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PRC\prcCharaExtract;
use App\Models\PRC\prcCharaRepack;
use App\Models\PRC\prcStageExtract;
use App\Models\PRC\prcStageRepack;
use Illuminate\Support\Facades\Storage;

class prcController extends Controller
{

    #region CHARA PRC
    public function StoreCharaPrc(Request $request)
    {
        $prcCharaExtract = new prcCharaExtract;

        $file = $request->file('fileInput');

        $prcCharaExtract->file = $file->getClientOriginalName();

        $prcCharaExtract->save();

        $path_tmp = $file->storeAs('public/prc/Chara/extract/input/' . $prcCharaExtract->id, extraController::keep_english($prcCharaExtract->file));

        $path = str_replace("public", "storage", $path_tmp);

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -d {$path} -o %CD%/storage/prc/Chara/extract/output/{$prcCharaExtract->id}/ui_chara_db.json -l %CD%/convert/ParamLabels.csv");

        return redirect("/prc/Chara/{$prcCharaExtract->id}");
    }

    public function GetCharaJSON($id)
    {

        if($id > 0){
            $jsonText = file_get_contents(public_path("/storage/prc/Chara/extract/output/{$id}/ui_chara_db.json"));
        }else{
            $jsonText = file_get_contents(public_path("/convert/defaults/Chara/ui_chara_db.json"));
        }

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
    #endregion


    #region STAGE PRC
    public function StoreStagePrc(Request $request)
    {
        $prcStageExtract = new prcStageExtract;

        $file = $request->file('fileInput');

        $prcStageExtract->file = $file->getClientOriginalName();

        $prcStageExtract->save();

        $path_tmp = $file->storeAs('public/prc/Stage/extract/input/' . $prcStageExtract->id, extraController::keep_english($prcStageExtract->file));

        $path = str_replace("public", "storage", $path_tmp);

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -d {$path} -o %CD%/storage/prc/Stage/extract/output/{$prcStageExtract->id}/ui_stage_db.json -l %CD%/convert/ParamLabels.csv");

        return redirect("/prc/Stage/{$prcStageExtract->id}");
    }

    public function GetStageJSON($id)
    {

        if($id > 0){
            $jsonText = file_get_contents(public_path("/storage/prc/Stage/extract/output/{$id}/ui_stage_db.json"));
        }else{
            $jsonText = file_get_contents(public_path("/convert/defaults/Stage/ui_stage_db.json"));
        }

        return $jsonText;

    }

    public function JSONtoStagePrc(Request $request)
    {
        $prcStageRepack = new prcStageRepack();

        $prcStageRepack->save();

        Storage::put("/public/prc/Stage/repack/input/{$prcStageRepack->id}/{$prcStageRepack->id}.json", $request->input("json"));

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -a \"%CD%/storage/prc/Stage/repack/input/{$prcStageRepack->id}/{$prcStageRepack->id}.json\" -o %CD%/storage/prc/Stage/repack/output/{$prcStageRepack->id}/ui_stage_db.prc -l %CD%/convert/ParamLabels.csv");

        return redirect("/storage/prc/Stage/repack/output/{$prcStageRepack->id}/ui_stage_db.prc");
    }
    #endregion

}
