<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Audio;
use App\AudioNUS3AUDIO;
use App\AudioLopus;
use App\AudioIDSP;
use App\brstm;
use App\brstmtonus3audio;
use App\nus3audio_replace;
use File;
use Validator;

class MainController extends Controller
{


    public function viewPage(){
        return view('view');
    }

    public function viewConvert(){
        return view('song_compatible');
    }

    public function viewBrstm(){
        return view('brstm_to_wav');
    }

    public function viewSoundBank(){
        return view('audio_replacement');
    }

    public function convertMusic(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }
        $audio = new Audio;

        $file = $request->file('music');

        $audio->filename = $file->getClientOriginalName();

        $audio->save();

        $path_tmp = $file->storeAs('public/normal/' . $audio->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = shell_exec("echo %CD%/storage/fixedwav/{$audio->id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $audio->log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/fixedwav/{$audio->id}/{$filename}.wav\"");

        $audio->save();
        $status = '<p class="card-text">Music Conversion Complete! You can download it from <a href="/storage/fixedwav/' . $audio->id . '/' . $filename .'.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/wav_hz_change/' . $audio->id . '">click here.</a></p>';

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

            $path_tmp = $file->storeAs('public/normalbrstm/' . $brstm->id, $file->getClientOriginalName());

            $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

            $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

            $tmp_path_1 = shell_exec("echo %CD%/storage/fixedbrstm/{$brstm->id}/");

            $tmp_path_2 = shell_exec("echo %CD%/storage/tmpbrstm/{$brstm->id}/");

            $tmp_path_2 = str_replace(' ', '', $tmp_path_2);

            File::makeDirectory($tmp_path_1, 0777, true, true);

            File::makeDirectory($tmp_path_2, 0777, true, true);

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

        $nus3audio->start_loop = $looparray[0];

        $nus3audio->end_loop = $looparray[1];

        $nus3audio->hz = $request->input("hz");

        $nus3audio->stage = $request->input("filenameOutput");

        $nus3audio->save();

        $path_tmp = $file->storeAs('public/nus3audioOG/' . $nus3audio->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);


        $sample_rate = MainController::sampleCheck($path);

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){
                $hz_convert = 48000 / floatval($sample_rate);

                $nus3audio->start_loop = intval($request->input("start_loop") * $hz_convert);

                $nus3audio->end_loop = intval($request->input("end_loop") * $hz_convert);
            }else{
                $nus3audio->start_loop = 0;
                $nus3audio->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = MainController::resample48($nus3audio->id, "nus3audioRE", $path);
        }else if($sample_rate != "48000"){
            $path = MainController::resample48($nus3audio->id, "nus3audioRE", $path);
        };

        if($nus3audio->end_loop == 0){
            $nus3audio->end_loop = MainController::getSamples($path);
        }

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus -l ' . $nus3audio->start_loop . '-' . $nus3audio->end_loop . ' --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus -l ' . $nus3audio->start_loop . '-' . $nus3audio->end_loop . ' --bitrate "48000" --CBR --opusheader namco ');
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopustmp/' . $nus3audio->id . '/output.lopus --bitrate "48000" --CBR --opusheader namco ');
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

        $fileOutput = $request->input("filenameOutput");

        $tmp_path = shell_exec("echo %CD%/storage/nus3audio/{$nus3audio->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

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

        $lopus->start_loop = $looparray[0];

        $lopus->end_loop = $looparray[1];

        $lopus->hz = $request->input("hz");

        $lopus->stage = $request->input("filenameOutput");

        $lopus->save();

        $path = $file->storeAs('public/lopusOG/' . $lopus->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        $sample_rate = MainController::sampleCheck($path);

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){
                $hz_convert = 48000 / floatval($sample_rate);

                $lopus->start_loop = intval($request->input("start_loop") * $hz_convert);

                $lopus->end_loop = intval($request->input("end_loop") * $hz_convert);
            }else{
                $lopus->start_loop = 0;
                $lopus->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = MainController::resample48($lopus->id, "lopusRE", $path);
        }else if($sample_rate != "48000"){
            $path = MainController::resample48($lopus->id, "lopusRE", $path);
        };

        if($lopus->end_loop == 0){
            $lopus->end_loop = MainController::getSamples($path);
        }

        $fileOutput = $request->input("filenameOutput");

        if($request->input("loop") == "on"){
            if($request->input("advanced") == "on"){
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/'. $fileOutput . '.lopus -l ' . $lopus->start_loop . '-' . $lopus->end_loop . ' --bitrate "'. $request->input("hz") .'" --CBR --opusheader namco ');
            }else{
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus -l ' . $lopus->start_loop . '-' . $lopus->end_loop . ' --bitrate "48000" --CBR --opusheader namco ');
            }
        }else{
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus --bitrate "48000" --CBR --opusheader namco ');
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

        $status = '<p class="card-text">Lopus Conversion Complete! You can download it from <a href="/storage/lopus/' . $lopus->id . '/' . $fileOutput . '.lopus">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/lopus/'. $lopus->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public function Createidsp($request, $looparray)
    {
        $idsp = new AudioIDSP;

        $file = $request->file('music');

        $idsp->filename = $file->getClientOriginalName();

        $idsp->start_loop = $looparray[0];

        $idsp->end_loop = $looparray[1];

        $idsp->hz = $request->input("hz");

        $idsp->stage = $request->input("filenameOutput");

        $idsp->save();

        $path = $file->storeAs('public/idspOG/' . $idsp->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $path);

        $file_ext = pathinfo($path, PATHINFO_EXTENSION);

        $sample_rate = MainController::sampleCheck($path);

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){
                $hz_convert = 48000 / floatval($sample_rate);

                $idsp->start_loop = intval($request->input("start_loop") * $hz_convert);

                $idsp->end_loop = intval($request->input("end_loop") * $hz_convert);
            }else{
                $idsp->start_loop = 0;
                $idsp->end_loop = 0;
            }
        }

        if($file_ext != "wav"){
            $path = MainController::resample48($idsp->id, "idspRE", $path);
        }else if($sample_rate != "48000"){
            $path = MainController::resample48($idsp->id, "idspRE", $path);
        };

        if($idsp->end_loop == 0){
            $idsp->end_loop = MainController::getSamples($path);
        }

        $fileOutput = $request->input("filenameOutput");

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp -l ' . $idsp->start_loop . '-' . $idsp->end_loop . ' --bitrate "' . $request->input("hz"). '"');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp -l ' . $idsp->start_loop . '-' . $idsp->end_loop);
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp --bitrate "' . $request->input("hz") . '"');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "' . $path . '" -o %CD%/storage/idsp/' . $idsp->id . '/'. $fileOutput . '.idsp');
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

    public function NUS3AUDIODetails($id)
    {
        $id = MainController::keepNumbers($id);
        $nus3audio = AudioNUS3AUDIO::where("id", $id)->first();
        return $nus3audio;
    }

    public function LopusDetails ($id){
        $id = MainController::keepNumbers($id);
        $lopus = AudioLopus::where("id", $id)->first();
        return $lopus;
    }

    public function IDSPDetails($id)
    {
        $id = MainController::keepNumbers($id);
        $idsp = AudioIDSP::where("id", $id)->first();
        return $idsp;
    }

    public function CompatibleDetails($id)
    {
        $id = MainController::keepNumbers($id);
        $audio = Audio::where("id", $id)->first();
        return $audio;
    }

    public function BrstmDetails($id)
    {
        $id = MainController::keepNumbers($id);
        $brstm = brstm::where("id", $id)->first();
        return $brstm;
    }

    public function replacement_nus3audio_details($id){
        $id = MainController::keepNumbers($id);
        $nus3audio_replace = nus3audio_replace::where("id", $id)->first();
        return $nus3audio_replace;
    }

    public function FindType(Request $request)
    {

        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        $looparray = array();

        $request->merge([
            'sampleHZinput' => MainController::keepNumbers($request->input("sampleHZinput")),
            'start_loop' => MainController::keepNumbers($request->input("start_loop")),
            'end_loop' => MainController::keepNumbers($request->input("end_loop")),
            'filenameOutput' => MainController::cleanInput($request->input("filenameOutput")),
            'hz' => MainController::keepNumbers($request->input("hz")),
        ]);

        if($request->input("filenameOutput") == ""){
            $request->merge([
                'filenameOutput' => "output",
            ]);
        }

        if($request->input("hz") == ""){
            $request->merge([
                'hz' => "48000",
            ]);
        }

        if($request->input("sampleHZinput") == ""){
            $request->merge([
                'sampleHZinput' => "auto",
            ]);
        }

        if($request->input("start_loop") == ""){
            $request->merge([
                'start_loop' => "0",
            ]);
        }

        if($request->input("end_loop") == ""){
            $request->merge([
                'end_loop' => "0",
            ]);
        }

        if($request->input("sampleHZinput") != "auto"){
            if($request->input("loop") == "on"){
                if(!empty($request->input("sampleHZinput"))){
                    $hz_convert = 48000 / floatval($request->input("sampleHZinput"));

                    $looparray[0] = intval($request->input("start_loop") * $hz_convert);

                    $looparray[1] = intval($request->input("end_loop") * $hz_convert);
                }else{
                    $looparray[0] = 0;
                    $looparray[1] = 0;
                }
            }else{
                $looparray[0] = 0;
                $looparray[1] = 0;
            }
        }else{
            $looparray[0] = 0;
            $looparray[1] = 0;
        }


        if($request->file('music')->getClientOriginalExtension() == "brstm"){
            return MainController::CreateNus3audioFromBRSTM($request, $looparray);
        }else{
            $filetype = $request->input("filetype");

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
        }
    }

    public function CreateNus3audioFromBRSTM($request, $looparray){

        $BTN = new brstmtonus3audio();

        $file = $request->file('music');

        $BTN->filename = $file->getClientOriginalName();

        $BTN->save();

        $path_tmp = $file->storeAs('public/normalBTN/' . $BTN->id, $file->getClientOriginalName());

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = public_path() . "/storage/fixedBTN/{$BTN->id}/";

        $tmp_path_2 = public_path() . "/storage/tmpBTN/{$BTN->id}/";

        File::makeDirectory($tmp_path_1, 0777, true, true);

        File::makeDirectory($tmp_path_2, 0777, true, true);

        $BTN->log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$path}\" -o \"%CD%/storage/tmpBTN/{$BTN->id}/{$filename}.wav\"");

        $BTN->log2 = shell_exec("%CD%/convert/sox/sox.exe \"%CD%/storage/tmpBTN/{$BTN->id}/{$filename}.wav\" -r 48000 \"%CD%/storage/fixedBTN/{$BTN->id}/{$filename}.wav\"");

        $BTN->start_loop = $looparray[0];

        $BTN->end_loop = $looparray[1];

        $sample_rate = MainController::sampleCheck(public_path() . "/storage/tmpBTN/{$BTN->id}/{$filename}.wav");

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){
                $hz_convert = 48000 / floatval($sample_rate);

                $BTN->start_loop = intval($request->input("start_loop") * $hz_convert);

                $BTN->end_loop = intval($request->input("end_loop") * $hz_convert);
            }else{
                $BTN->start_loop = 0;
                $BTN->end_loop = 0;
            }
        }

        $BTN->hz = $request->input("hz");

        $BTN->stage = $request->input("filenameOutput");


        if($BTN->end_loop == 0){
            $BTN->end_loop = MainController::getSamples(public_path() . "/storage/fixedBTN/{$BTN->id}/{$filename}.wav");
        }

        $BTN->save();

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "'. $tmp_path_1 . '/' . $filename . '.wav" -o "%CD%/storage/lopusBTN/' . $BTN->id . '/output.lopus" -l ' . $BTN->start_loop . '-' . $BTN->end_loop . ' --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "'. $tmp_path_1 . '/' . $filename . '.wav" -o "%CD%/storage/lopusBTN/' . $BTN->id . '/output.lopus" -l ' . $BTN->start_loop . '-' . $BTN->end_loop . ' --bitrate "48000" --CBR --opusheader namco ');
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "'. $tmp_path_1 . '/' . $filename . '.wav" -o "%CD%/storage/lopusBTN/' . $BTN->id . '/output.lopus" --bitrate "' . $request->input("hz") . '" --CBR --opusheader namco ');
            } else {
                $log = shell_exec('%CD%/convert/VGAudioCli.exe -i "'. $tmp_path_1 . '/' . $filename . '.wav" -o "%CD%/storage/lopusBTN/' . $BTN->id . '/output.lopus" --bitrate "48000" --CBR --opusheader namco ');
            }
        }

        $fileOutput = $request->input("filenameOutput");

        $tmp_path = shell_exec("echo %CD%/storage/BTN/{$BTN->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe %CD%/convert/base.nus3audio -r 0 %CD%/storage/lopusBTN/{$BTN->id}/output.lopus -w %CD%/storage/BTN/{$BTN->id}/{$fileOutput}.nus3audio");

        $BTN->log = $log;

        $BTN->log2 = $log2;

        $BTN->save();

        $status = '<p class="card-text">brstm to nus3audio Conversion Complete! You can download it from <a href="/storage/BTN/'. $BTN->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a href="/details/brstm_to_nus3audio/' . $BTN->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public function BrstmToNus3audioDetails($id){
        $id = MainController::keepNumbers($id);
        $brstm_to_nus3audio = brstmtonus3audio::where("id", $id)->first();
        return $brstm_to_nus3audio;
    }

    public function replacement_nus3audio(Request $request){

        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file (nus3audio)!</p>';
            return redirect()->back()->with('error', $status);
        }


        if($request->file('music')->getClientOriginalExtension() == "nus3audio"){

            $nus3audio_replace = new nus3audio_replace;

            $file = $request->file('music');

            $nus3audio_replace->filename = $file->getClientOriginalName();

            $nus3audio_replace->save();

            $path_tmp = $file->storeAs('public/nus3audio_replace/' . $nus3audio_replace->id, $file->getClientOriginalName());

            $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

            $folder_path = public_path() . "/storage/nus3audio_replace/{$nus3audio_replace->id}/output";

            File::MakeDirectory($path, 0777, true, true);

            $nus3audio_replace->nus3audio_info = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -p");

            $nus3audio_replace->log = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -i \"{$folder_path}\" ");

            $i = 0;

            $files_name = [];

            $files_id = [];

            foreach($request->file("files") as $file_input){
                $file_id = MainController::keepNumbers($request->input("files_id")[$i]);

                $check = "public/nus3audio_replace/{$nus3audio_replace->id}/output/{$file_id}.{$file_input->getClientOriginalExtension()}";

                if(Storage::exists($check)){
                    Storage::delete($check);
                }

                if($file_input->getClientOriginalExtension() == "idsp" || $file_input->getClientOriginalExtension() == "lopus"){
                    $tmp = $file_input->storeAs('public/nus3audio_replace/' . $nus3audio_replace->id . '/output', $file_id.".".$file_input->getClientOriginalExtension());

                    array_push($files_name, $file_input->getClientOriginalName());

                    array_push($files_id, $file_id);

                    $i++;
                }else{
                    $status = "<p class=\"card-text\">File {$file_input->getClientOriginalName()} is invalid (Only idsp/lopus is supported)!</p>";
                    return redirect()->back()->with('error', $status);
                }

            }

            $nus3audio_replace->replace_files = serialize($files_name);

            $nus3audio_replace->replace_ids = serialize($files_id);

            $nus3audio_replace->log2 = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -a \"{$folder_path}\" -w \"{$path}\"");

            $nus3audio_replace->save();

            $status = "
            <p class=\"card-text\">
            Replacment complete! You can download the file from <a href=\"/storage/nus3audio_replace/{$nus3audio_replace->id}/{$nus3audio_replace->filename}\">here!</a>
            <br>
            For more information, you can click <a href=\"/details/nus3audio_replace/{$nus3audio_replace->id}\">here!</a>
            </p>";

            //return $status;
            return redirect()->back()->with('success', $status);
        }else{
            $status = '<p class="card-text">Please upload a valid file (nus3audio)!</p>';
            return redirect()->back()->with('error', $status);
        }
    }


    public function sampleCheck($path){
        $sample_rate = shell_exec('python python3/sample.py "' . $path . '" ');

        return $sample_rate;
    }

    public function resample48($id, $name, $path){

        $tmp_path_1 = shell_exec("echo %CD%/storage/{$name}/{$id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/{$name}/{$id}/output.wav\"");

        return public_path() . "/storage/{$name}/{$id}/output.wav";
    }

    public function getSamples($path){
        $sample_length = shell_exec('python python3/sample_length.py "' . $path . '" ');

        return $sample_length;
    }

    public function keepNumbers($string){
        $string = preg_replace('/[^0-9]/','',$string);
        return $string;
    }

    public function cleanInput($string){
        $string = preg_replace('/[^a-zA-Z0-9_]/', "_", $string);
        return $string;
    }
}
