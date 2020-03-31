<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\audioToBrstm;

class brstmController extends Controller
{
    public static function CreateBRSTM($request, $looparray)
    {
        $brstm = new audioToBrstm;

        $file = $request->file('music');

        $brstm->filename = $file->getClientOriginalName();

        $brstm->start_loop = $looparray[0];

        $brstm->end_loop = $looparray[1];

        $brstm->hz = $request->input("hz");

        $brstm->stage = $request->input("filenameOutput");

        $brstm->save();

        $path = $file->storeAs('public/audio/brstmOG/' . $brstm->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        if($file_ext != "wav"){
            $sample_rate = extraController::sampleCheck(extraController::convert_to_wav($brstm->id, "brstm_TMP_WAV", $path));
        }else{
            $sample_rate = extraController::sampleCheck($path);
        }

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){

                $hz_convert = 48000 / floatval($sample_rate);

                $start = $request->input("start_loop");

                $end = $request->input("end_loop");

                if(strpos($start, ":") !== false || strpos($start, ".") !== false){
                    $start = extraController::time_to_samples($start, $sample_rate);
                    $brstm->start_loop = $start * $hz_convert;
                }else{
                    $brstm->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $brstm->end_loop = $end * $hz_convert;
                }else{
                    $brstm->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $brstm->start_loop = 0;
                $brstm->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = extraController::resample48($brstm->id, "brstmRE", $path);
        }else if($sample_rate != "48000"){
            $path = extraController::resample48($brstm->id, "brstmRE", $path);
        };

        if($brstm->end_loop == 0){
            $brstm->end_loop = extraController::getSamples($path);
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/brstm/{$brstm->id}/{$fileOutput}.brstm -l {$brstm->start_loop}-{$brstm->end_loop} --bitrate \"{$request->input("hz")}\" ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/brstm/{$brstm->id}/{$fileOutput}.brstm -l {$brstm->start_loop}-{$brstm->end_loop} --bitrate \"48000\"");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/brstm/{$brstm->id}/{$fileOutput}.brstm --bitrate \"{$request->input("hz")}\"");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/brstm/{$brstm->id}/{$fileOutput}.brstm --bitrate \"48000\"");
            }
        }

        $arr = explode(' ', $log);

        if($arr[0] == "The" && $arr[1] == "loop"){
            $brstm->log = $log;

            $brstm->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "Error" && $arr[1] == "parsing"){
            $brstm->log = $log;

            $brstm->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }

        $brstm->log = $log;

        $brstm->save();

        $status = '<p class="card-text">BRSTM Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/brstm/' . $brstm->id . '/' . $fileOutput . '.brstm">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/brstm/'. $brstm->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }
}
