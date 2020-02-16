<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;
use App\AudioNUS3AUDIO;
use File;
use Illuminate\Support\Facades\Storage;
use App\brstm;
use App\brstmtonus3audio;
use App\nus3audio_replace;

class nus3audioController extends Controller
{

    public static function Createnus3audio($request, $looparray){

        $nus3audio = new AudioNUS3AUDIO();

        $file = $request->file('music');

        $nus3audio->filename = $file->getClientOriginalName();

        $nus3audio->start_loop = $looparray[0];

        $nus3audio->end_loop = $looparray[1];

        $nus3audio->hz = $request->input("hz");

        $nus3audio->stage = $request->input("filenameOutput");

        $nus3audio->save();

        $path_tmp = $file->storeAs('public/nus3audioOG/' . $nus3audio->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        if($file_ext != "wav"){
            $sample_rate = extraController::sampleCheck(extraController::convert_to_wav($nus3audio->id, "nus3audio_TMP_WAV", $path));
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
                    $nus3audio->start_loop = $start * $hz_convert;
                }else{
                    $nus3audio->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $nus3audio->end_loop = $end * $hz_convert;
                }else{
                    $nus3audio->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $nus3audio->start_loop = 0;
                $nus3audio->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = extraController::resample48($nus3audio->id, "nus3audioRE", $path);
        }else if($sample_rate != "48000"){
            $path = extraController::resample48($nus3audio->id, "nus3audioRE", $path);
        };

        if($nus3audio->end_loop == 0){
            $nus3audio->end_loop = extraController::getSamples($path);
        }

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus -l {$nus3audio->start_loop}-{$nus3audio->end_loop} --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus -l {$nus3audio->start_loop}-{$nus3audio->end_loop} --bitrate \"48000\" --CBR --opusheader namco");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus --bitrate \"48000\" --CBR --opusheader namco ");
            }
        }

        $arr = explode(' ', $log);

        if($arr[0] == "The" && $arr[1] == "loop"){
            $nus3audio->log = $log;

            $nus3audio->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "Error" && $arr[1] == "parsing"){
            $nus3audio->log = $log;

            $nus3audio->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        $tmp_path = shell_exec("echo %CD%/storage/nus3audio/{$nus3audio->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe %CD%/convert/base.nus3audio -r 0 %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus -w %CD%/storage/nus3audio/{$nus3audio->id}/{$fileOutput}.nus3audio");

        $nus3audio->log = $log;

        $nus3audio->log2 = $log2;

        $nus3audio->save();

        $status = '<p class="card-text">nus3audio Conversion Complete! You can download it from <a class="return_link" href="/storage/nus3audio/'. $nus3audio->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/nus3audio/' . $nus3audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public static function lopusToNus3audio($request){
        $nus3audio = new AudioNUS3AUDIO();

        $file = $request->file('music');

        $nus3audio->filename = $file->getClientOriginalName();

        $nus3audio->start_loop = "lopus";

        $nus3audio->end_loop = "nus3audio";

        $nus3audio->hz = $request->input("hz");

        $nus3audio->stage = $request->input("filenameOutput");

        $nus3audio->save();

        $path = $file->storeAs('public/nus3audioOG/' . $nus3audio->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        $tmp_path = shell_exec("echo %CD%/storage/nus3audio/{$nus3audio->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $nus3audio->log = shell_exec("%CD%/convert/nus3audio.exe \"%CD%/convert/base.nus3audio\" -r 0 \"{$path}\" -w \"%CD%/storage/nus3audio/{$nus3audio->id}/{$fileOutput}.nus3audio\"");

        $nus3audio->save();

        $status = '<p class="card-text">lopus -> nus3audio Conversion Complete! You can download it from <a class="return_link" href="/storage/nus3audio/'. $nus3audio->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/nus3audio/' . $nus3audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }
}
