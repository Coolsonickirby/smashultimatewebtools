<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Audio;
use App\AudioNUS3AUDIO;
use App\AudioLopus;
use App\AudioIDSP;
use App\brstm;
use File;
use Validator;

class MainController extends Controller
{


    public function ViewPage(){
        return view('view');
    }

    public function ViewConvert(){
        return view('songcompatible');
    }

    public function ViewBrstm(){
        return view('brstmtowav');
    }

    public function ConvertMusic(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }
        $audio = new Audio;

        $file = $request->file('music');

        $audio->filename = $file->getClientOriginalName();

        $audio->save();

        $pathtmp = $file->storeAs('public/normal/' . $audio->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $pathtmp);

        $filename = pathinfo($pathtmp, PATHINFO_FILENAME);

        $tmppath1 = shell_exec("echo %CD%/storage/fixedwav/{$audio->id}/");

        File::makeDirectory($tmppath1, 0777, true, true);

        $audio->log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/fixedwav/{$audio->id}/{$filename}.wav\"");

        $audio->save();
        $status = '<p class="card-text">Music Conversion Complete! You can download it from <a href="/storage/fixedwav/' . $audio->id . '/' . $filename .'.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/wavhzchange/' . $audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public function ConvertBrstm(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        if($request->file('music')->getClientOriginalExtension() == "brstm" || $request->file('music')->getClientOriginalExtension() == "idsp" || $request->file('music')->getClientOriginalExtension() == "lopus"){
            $brstm = new brstm;

            $file = $request->file('music');

            $brstm->filename = $file->getClientOriginalName();

            $brstm->save();

            $pathtmp = $file->storeAs('public/normalbrstm/' . $brstm->id, $file->getClientOriginalName());

            $path = public_path() . '/' . str_replace("public", "storage", $pathtmp);

            $filename = pathinfo($pathtmp, PATHINFO_FILENAME);

            $tmppath1 = shell_exec("echo %CD%/storage/fixedbrstm/{$brstm->id}/");

            $tmppath2 = shell_exec("echo %CD%/storage/tmpbrstm/{$brstm->id}/");

            $tmppath2 = str_replace(' ', '', $tmppath2);

            File::makeDirectory($tmppath1, 0777, true, true);

            File::makeDirectory($tmppath2, 0777, true, true);

            $brstm->log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/tmpbrstm/{$brstm->id}/{$filename}.wav\"");

            $brstm->log2 = shell_exec("%CD%/convert/sox/sox.exe \"%CD%/storage/tmpbrstm/{$brstm->id}/{$filename}.wav\" -r 48000 \"%CD%/storage/fixedbrstm/{$brstm->id}/{$filename}.wav\"");

            $brstm->save();

            $status = '<p class="card-text">Music Conversion Complete! You can download it from <a href="/storage/fixedbrstm/' . $brstm->id . '/' . $filename . '.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/brstm/' . $brstm->id . '">click here.</a></p>';

            return redirect()->back()->with('success', $status);
        }else{
            $status = '<p class="card-text">Please upload a valid file type (brstm, idsp, lopus)!</p>';
            return redirect()->back()->with('error', $status);
        }

    }

    public function Createnus3audio($request, $looparray){
        $nus3audio = new AudioNUS3AUDIO();

        $file = $request->file('music');

        $nus3audio->filename = $file->getClientOriginalName();

        $nus3audio->startloop = $looparray[0];

        $nus3audio->endloop = $looparray[1];

        $nus3audio->hz = $request->input("hz");

        $nus3audio->stage = $request->input("filenameOutput");

        $nus3audio->save();

        $pathtmp = $file->storeAs('public/nus3audioOG/' . $nus3audio->id, $file->getClientOriginalName());

        $path = str_replace("public", "storage", $pathtmp);

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus -l ' . $nus3audio->startloop . '-' . $nus3audio->endloop . ' --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus -l ' . $nus3audio->startloop . '-' . $nus3audio->endloop . ' --bitrate "48000" --CBR --opusheader namco ');
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus --bitrate "48000" --CBR --opusheader namco ');
            }
        }

        $arr = explode(' ', $log);

        if($arr[0] == "Sample" && $arr[1] == "rate"){
            $nus3audio->log = $log;

            $nus3audio->save();

            $status = '<p class="card-text">'. $log . ' (Use "Convert Song to Compatible wav" in the extras section.)</p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "The" && $arr[1] == "loop"){
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

        $fileOutput = $request->input("filenameOutput");

        $tmppath = shell_exec("echo %CD%/storage/nus3audio/{$nus3audio->id}/");

        File::makeDirectory($tmppath, 0777, true, true);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe %CD%/convert/base.nus3audio -r 0 %CD%/storage/lopustmp/{$nus3audio->id}/output.lopus -w %CD%/storage/nus3audio/{$nus3audio->id}/{$fileOutput}.nus3audio");

        $nus3audio->log = $log;

        $nus3audio->log2 = $log2;

        $nus3audio->save();

        $status = '<p class="card-text">nus3audio Conversion Complete! You can download it from <a href="/storage/nus3audio/'. $nus3audio->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/nus3audio/' . $nus3audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public function Createlopus($request, $looparray)
    {
        $lopus = new AudioLopus;

        $file = $request->file('music');

        $lopus->filename = $file->getClientOriginalName();

        $lopus->startloop = $looparray[0];

        $lopus->endloop = $looparray[1];

        $lopus->hz = $request->input("hz");

        $lopus->stage = $request->input("filenameOutput");

        $lopus->save();

        $pathtmp = $file->storeAs('public/lopusOG/' . $lopus->id, $file->getClientOriginalName());

        $path = str_replace("public", "storage", $pathtmp);

        $fileOutput = $request->input("filenameOutput");

        if($request->input("loop") == "on"){
            if($request->input("advanced") == "on"){
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/'. $fileOutput . '.lopus -l ' . $lopus->startloop . '-' . $lopus->endloop . ' --bitrate "'. $request->input("hz") .'" --CBR --opusheader namco ');
            }else{
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus -l ' . $lopus->startloop . '-' . $lopus->endloop . ' --bitrate "48000" --CBR --opusheader namco ');
            }
        }else{
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus --bitrate "48000" --CBR --opusheader namco ');
            }
        }

        $arr = explode(' ', $log);

        if ($arr[0] == "Sample" && $arr[1] == "rate") {
            $lopus->log = $log;

            $lopus->save();

            $status = '<p class="card-text">' . $log . ' (If you are seeing this, use "Convert Song to Compatible wav" in the extras section.)</p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "The" && $arr[1] == "loop"){
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

        $status = '<p class="card-text">Lopus Conversion Complete! You can download it from <a href="/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/lopus/'. $lopus->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public function Createidsp($request, $looparray)
    {
        $idsp = new AudioIDSP;

        $file = $request->file('music');

        $idsp->filename = $file->getClientOriginalName();

        $idsp->startloop = $looparray[0];

        $idsp->endloop = $looparray[1];

        $idsp->hz = $request->input("hz");

        $idsp->stage = $request->input("filenameOutput");

        $idsp->save();

        $pathtmp = $file->storeAs('public/idspOG/' . $idsp->id, $file->getClientOriginalName());

        $path = str_replace("public", "storage", $pathtmp);

        $fileOutput = $request->input("filenameOutput");

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp -l ' . $idsp->startloop . '-' . $idsp->endloop . ' --bitrate "' . $request->input("hz"). '"');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp -l ' . $idsp->startloop . '-' . $idsp->endloop);
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp --bitrate "' . $request->input("hz") . '"');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "%CD%/' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp');
            }
        }

        $arr = explode(' ', $log);

        if ($arr[0] == "Sample" && $arr[1] == "rate") {
            $idsp->log = $log;

            $idsp->save();

            $status = '<p class="card-text">' . $log . ' (If you are seeing this, use "Convert Song to Compatible wav" in the extras section.)</p>';
            return redirect()->back()->with('error', $status);
        }else if($arr[0] == "The" && $arr[1] == "loop"){
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

    public function NUS3AUDIODetails($id)
    {
        $nus3audio = AudioNUS3AUDIO::where("id", $id)->first();

        return $nus3audio;
    }

    public function LopusDetails ($id){
        $lopus = AudioLopus::where("id", $id)->first();

        return $lopus;
    }

    public function IDSPDetails($id)
    {
        $idsp = AudioIDSP::where("id", $id)->first();

        return $idsp;
    }

    public function CompatibleDetails($id)
    {
        $audio = Audio::where("id", $id)->first();

        return $audio;
    }

    public function BrstmDetails($id)
    {
        $brstm = brstm::where("id", $id)->first();

        return $brstm;
    }

    public function FindType(Request $request)
    {

        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        if($request->file('music')->getClientOriginalExtension() == "wav" || $request->file('music')->getClientOriginalExtension() == "lopus" || $request->file('music')->getClientOriginalExtension() == "idsp" ){
            $filetype = $request->input("filetype");

            $looparray = array();

            if($request->input("loop") == "on"){
                if(!empty($request->input("sampleHZinput"))){
                    $hzconvert = 48000 / floatval($request->input("sampleHZinput"));

                    $looparray[0] = intval($request->input("startloop") * $hzconvert);

                    $looparray[1] = intval($request->input("endloop") * $hzconvert);
                }else{
                    $looparray[0] = 0;
                    $looparray[1] = 1;
                }
            }else{
                $looparray[0] = 0;
                $looparray[1] = 1;
            }

            if ($filetype == "nus3audio") {
                return MainController::Createnus3audio($request, $looparray);
            } else if ($filetype == "lopus") {
                return MainController::Createlopus($request, $looparray);
            } else if ($filetype == "idsp") {
                return MainController::Createidsp($request, $looparray);
            } else {
                $status = '<p class="card-text">Please select a valid file type!</p>';
                return redirect()->back()->with('error', $status);
            };
        }else{
            $status = '<p class="card-text">Please upload a valid file type (wav, idsp, lopus)!</p>';
            return redirect()->back()->with('error', $status);
        }
    }

}
