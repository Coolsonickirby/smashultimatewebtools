<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AudioIDSP;


class idspController extends Controller
{
    public static function Createidsp($request, $looparray)
    {
        $idsp = new AudioIDSP;

        $file = $request->file('music');

        $idsp->filename = $file->getClientOriginalName();

        $idsp->start_loop = $looparray[0];

        $idsp->end_loop = $looparray[1];

        $idsp->hz = $request->input("hz");

        $idsp->stage = $request->input("filenameOutput");

        $idsp->save();

        $path = $file->storeAs('public/idspOG/' . $idsp->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        if($file_ext != "wav"){
            $sample_rate = extraController::sampleCheck(extraController::convert_to_wav($idsp->id, "idsp_TMP_WAV", $path));
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
                    $idsp->start_loop = $start * $hz_convert;
                }else{
                    $idsp->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $idsp->end_loop = $end * $hz_convert;
                }else{
                    $idsp->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $idsp->start_loop = 0;
                $idsp->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = extraController::resample48($idsp->id, "idspRE", $path);
        }else if($sample_rate != "48000"){
            $path = extraController::resample48($idsp->id, "idspRE", $path);
        };

        if($idsp->end_loop == 0){
            $idsp->end_loop = extraController::getSamples($path);
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/idsp/{$idsp->id}/{$fileOutput}.idsp\" -l {$idsp->start_loop}-{$idsp->end_loop} --bitrate \"{$request->input("hz")}\"");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/idsp/{$idsp->id}/{$fileOutput}.idsp\" -l {$idsp->start_loop}-{$idsp->end_loop}");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/idsp/{$idsp->id}/{$fileOutput}.idsp\" --bitrate \"{$request->input("hz")}\"");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/idsp/{$idsp->id}/{$fileOutput}.idsp\"");
            }
        }

        $arr = explode(' ', $log);

        if($arr[0] == "The" && $arr[1] == "loop"){
            $idsp->log = $log;

            $idsp->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "Error" && $arr[1] == "parsing"){
            $idsp->log = $log;

            $idsp->save();

            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return redirect()->back()->with('error', $status);
        }

        $idsp->log = $log;

        $idsp->save();

        $status = '<p class="card-text">IDSP Conversion Complete! You can download it from <a href="/storage/idsp/' . $idsp->id . '/' . $fileOutput . '.idsp">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/idsp/' . $idsp->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }
}
