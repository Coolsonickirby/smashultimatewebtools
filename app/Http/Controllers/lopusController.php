<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Audio\AudioLopus;

class lopusController extends Controller
{

    public static function Createlopus($request, $looparray)
    {
        $lopus = new AudioLopus;

        $file = $request->file('music');

        $lopus->filename = $file->getClientOriginalName();

        $lopus->start_loop = $looparray[0];

        $lopus->end_loop = $looparray[1];

        $lopus->hz = $request->input("hz");

        $lopus->stage = $request->input("filenameOutput");

        $lopus->save();

        $path = $file->storeAs('public/audio/lopusOG/' . $lopus->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        if($file_ext != "wav"){
            $sample_rate = extraController::sampleCheck(extraController::convert_to_wav($lopus->id, "lopus_TMP_WAV", $path));
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
                    $lopus->start_loop = $start * $hz_convert;
                }else{
                    $lopus->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $lopus->end_loop = $end * $hz_convert;
                }else{
                    $lopus->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $lopus->start_loop = 0;
                $lopus->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = extraController::resample48($lopus->id, "lopusRE", $path);
        }else if($sample_rate != "48000"){
            $path = extraController::resample48($lopus->id, "lopusRE", $path);
        };

        if($lopus->end_loop == 0){
            $lopus->end_loop = extraController::getSamples($path);
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus -l {$lopus->start_loop}-{$lopus->end_loop} --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus -l {$lopus->start_loop}-{$lopus->end_loop} --bitrate \"48000\" --CBR --opusheader namco");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus --bitrate \"48000\" --CBR --opusheader namco ");
            }
        }

        $arr = explode(' ', $log);

        $lopus->log = $log;

        $lopus->save();

        $errorCheck = extraController::errorCheck($arr, $log);

        if($errorCheck[0]){
            return redirect()->back()->with('error', $errorCheck[1]);
        };

        $status = '<p class="card-text">Lopus Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/lopus/'. $lopus->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public static function idspToLopus($request, $looparray){
        $lopus = new AudioLopus;

        $file = $request->file('music');

        $lopus->filename = $file->getClientOriginalName();

        $lopus->start_loop = $looparray[0];

        $lopus->end_loop = $looparray[1];

        $lopus->hz = $request->input("hz");

        $lopus->stage = $request->input("filenameOutput");

        $lopus->save();

        $path = $file->storeAs('public/audio/lopusOG/' . $lopus->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/audio/lopustmp/{$lopus->id}/output.wav\" ");

        $path = public_path() . "/storage/audio/lopustmp/{$lopus->id}/output.wav";

        $sample_rate = extraController::sampleCheck($path);

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){

                $hz_convert = 48000 / floatval($sample_rate);

                $start = $request->input("start_loop");

                $end = $request->input("end_loop");

                if(strpos($start, ":") !== false || strpos($start, ".") !== false){
                    $start = extraController::time_to_samples($start, $sample_rate);
                    $lopus->start_loop = $start * $hz_convert;
                }else{
                    $lopus->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $lopus->end_loop = $end * $hz_convert;
                }else{
                    $lopus->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $lopus->start_loop = 0;
                $lopus->end_loop = 0;
            }
        }

        if($sample_rate != "48000"){
            $path = extraController::resample48($lopus->id, "lopusRE", $path);
        };

        if($lopus->end_loop == 0){
            $lopus->end_loop = extraController::getSamples($path);
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus -l {$lopus->start_loop}-{$lopus->end_loop} --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus -l {$lopus->start_loop}-{$lopus->end_loop} --bitrate \"48000\" --CBR --opusheader namco");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o %CD%/storage/audio/lopus/{$lopus->id}/{$fileOutput}.lopus --bitrate \"48000\" --CBR --opusheader namco ");
            }
        }

        $arr = explode(' ', $log);

        if($arr[0] == "The" && $arr[1] == "loop"){
            $lopus->log = $log;

            $lopus->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "Error" && $arr[1] == "parsing"){
            $lopus->log = $log;

            $lopus->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }

        $lopus->log = $log;

        $lopus->save();

        $status = '<p class="card-text">IDSP -> Lopus Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/lopus/'. $lopus->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }
}
