<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PRC\prcCharaExtract;
use App\Models\PRC\prcCharaRepack;
use App\Models\PRC\prcStageExtract;
use App\Models\PRC\prcStageRepack;
use App\Models\PRC\prcFighterParamExtract;
use App\Models\PRC\prcFighterParamRepack;
use App\Models\PRC\prcUpdater;
use File;
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
            $jsonText = file_get_contents(public_path("/convert/defaults/PRC/ui_chara_db.json"));
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
            $jsonText = file_get_contents(public_path("/convert/defaults/PRC/ui_stage_db.json"));
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


    #region FIGHTER PARAM PRC
    public function StoreFighterParamPrc(Request $request)
    {
        $prcFighterParamExtract = new prcFighterParamExtract;

        $file = $request->file('fileInput');

        $prcFighterParamExtract->file = $file->getClientOriginalName();

        $prcFighterParamExtract->save();

        $path_tmp = $file->storeAs('public/prc/FighterParam/extract/input/' . $prcFighterParamExtract->id, extraController::keep_english($prcFighterParamExtract->file));

        $path = str_replace("public", "storage", $path_tmp);

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -d {$path} -o %CD%/storage/prc/FighterParam/extract/output/{$prcFighterParamExtract->id}/fighter_param.json -l %CD%/convert/ParamLabels.csv");

        return redirect("/prc/FighterParam/{$prcFighterParamExtract->id}");
    }

    public function GetFighterParamJSON($id)
    {

        if($id > 0){
            $jsonText = file_get_contents(public_path("/storage/prc/FighterParam/extract/output/{$id}/fighter_param.json"));
        }else{
            $jsonText = file_get_contents(public_path("/convert/defaults/PRC/fighter_param.json"));
        }

        return $jsonText;

    }

    public function JSONtoFighterParamPrc(Request $request)
    {
        $prcFighterParamRepack = new prcFighterParamRepack();

        $prcFighterParamRepack->save();

        Storage::put("/public/prc/FighterParam/repack/input/{$prcFighterParamRepack->id}/{$prcFighterParamRepack->id}.json", $request->input("json"));

        shell_exec("dotnet %CD%/convert/prc2json/prc2json.dll -a \"%CD%/storage/prc/FighterParam/repack/input/{$prcFighterParamRepack->id}/{$prcFighterParamRepack->id}.json\" -o %CD%/storage/prc/FighterParam/repack/output/{$prcFighterParamRepack->id}/fighter_param.prc -l %CD%/convert/ParamLabels.csv");

        return redirect("/storage/prc/FighterParam/repack/output/{$prcFighterParamRepack->id}/fighter_param.prc");
    }
    #endregion

    public function UpdatePrc(Request $request){
        // return $request;
        $request->validate([
            'modded_file' => 'required',
            'type_of_update' => 'required|in:ui_bgm_db,ui_chara_db,ui_stage_db,fighter_param,other',
        ]);

        if($request->input("select_type") == "other" && !$request->hasFile("updated_file")){
            return redirect()->back()->with("error", "Other type was selected but no file was uploaded!");
        }

        $use_default = true;

        $prc = new prcUpdater();

        $prc->type_of_update = $request->input("type_of_update");

        $prc->og_file_name = "";
        $prc->modded_file_name = "";

        $prc->save();

        $file = $request->file('modded_file');

        $clean_filename = extraController::keep_english($file->getClientOriginalName());

        $modded_path = $file->storeAs('public/prc/updater/beforeUpdate/' . $prc->id, $clean_filename);

        $modded_path = str_replace("public", "storage", $modded_path);

        $updated_prc = "";
        $clean_filename_updated = "";

        if($prc->type_of_update == "other"){
            $clean_prc_file = $request->file('updated_file');

            $clean_filename_updated = extraController::keep_english($clean_prc_file->getClientOriginalName());

            $updated_prc = $clean_prc_file->storeAs('public/prc/updater/beforeUpdate/' . $prc->id, "clean.prc");

            $updated_prc = str_replace("public", "storage", $updated_prc);

            $use_default = false;
        }else{
            $use_default = true;
            $updated_prc = public_path() . "/convert/defaults/PRC/{$prc->type_of_update}.json";
            $clean_filename_updated = "{$prc->type_of_update}.prc";
        }

        $prc->og_file_name = $file->getClientOriginalName();
        $prc->modded_file_name = $clean_filename_updated;
        $prc->save();

        $outFolder = public_path() . "/storage/prc/updater/afterUpdate/{$prc->id}/";

        File::MakeDirectory($outFolder, 0777, true, true);

        $modded_json_path = "{$outFolder}/modded.json";
        $original_json_path = "{$outFolder}/original.json";

        $generate_modded_json = shell_exec("dotnet \"%CD%/convert/prc2json/prc2json.dll\" -d \"%CD%/{$modded_path}\" -o \"{$modded_json_path}\" -l %CD%/convert/ParamLabels.csv");

        if(!$use_default){
            $generate_original_json = shell_exec("dotnet \"%CD%/convert/prc2json/prc2json.dll\" -d \"%CD%/{$updated_prc}\" -o \"{$original_json_path}\" -l %CD%/convert/ParamLabels.csv");
        }else{
            $original_json_path = $updated_prc;
        }

        $out_combined_json = "{$outFolder}/combined.json";
        $out_combined_prc = "{$outFolder}/{$clean_filename_updated}";

        $generate_combined_json = shell_exec("node \"C:/Node/json-merge/json_merge.js\" \"{$modded_json_path}\" \"{$original_json_path}\" \"{$out_combined_json}\"");

        $generate_combined_prc = shell_exec("dotnet \"%CD%/convert/prc2json/prc2json.dll\" -a \"{$out_combined_json}\" -o \"{$out_combined_prc}\" -l %CD%/convert/ParamLabels.csv");


        return redirect("/storage/prc/updater/afterUpdate/{$prc->id}/{$clean_filename_updated}");
    }

}
