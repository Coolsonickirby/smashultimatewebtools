<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Audio\Audio;
use App\Models\Audio\AudioNUS3AUDIO;
use App\Models\Audio\brstm;
use App\Models\Audio\brstmtonus3audio;
use App\Models\Audio\nus3audio_replace;
use File;
use Validator;
use PHPHtmlParser\Dom;


class MainController extends Controller
{


    public function viewPage(){
        return view('audio/view');
    }

    public function viewConvert(){
        return view('audio/song_compatible');
    }

    public function viewVGMStream(){
        return view('audio/vgmstream_wav');
    }

    public function viewSoundBank(){
        return view('audio/audio_replacement');
    }

    public function viewZipToIdsp(){
        return view('audio/zip_to_idsp');
    }

    public function viewZipToNus3audio(){
        return view('audio/zip_to_nus3audio');
    }

    public function FindType(Request $request)
    {

        // if($request->input("hz") != "test"){
        //     return '<h2 style="font-family: cursive;" >Closed for a while because DSX is making me fix something ;_;</h2>';
        // }else{
        //     $request->merge([
        //         'hz' => "64000",
        //     ]);
        // }

        $filetype = $request->input("filetype");

        if($filetype == "youtube"){
            return extraController::youtubeToNus3audio($request);
        }


        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        $looparray = array();

        $request->merge([
            'sampleHZinput' => extraController::keepNumbers($request->input("sampleHZinput")),
            'filenameOutput' => extraController::cleanInput($request->input("filenameOutput")),
            'hz' => extraController::keepNumbers($request->input("hz")),
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

        if($request->input("sample_rate") == ""){
            $request->merge([
                'sample_rate' => "48000",
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

                    $start = $request->input("start_loop");

                    $end = $request->input("end_loop");

                    if(strpos($start, ":") !== false || strpos($start, ".") !== false){
                        $start = extraController::time_to_samples($start, intval($request->input("sampleHZinput")));
                        $looparray[0] = $start * $hz_convert;
                    }else{
                        $looparray[0] = intval(extraController::keepNumbers($start) * $hz_convert);
                    }

                    if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                        $end = extraController::time_to_samples($end, intval($request->input("sampleHZinput")));
                        $looparray[1] = $end * $hz_convert;
                    }else{
                        $looparray[1] = intval(extraController::keepNumbers($end) * $hz_convert);
                    }
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

        $ext = $request->file('music')->getClientOriginalExtension();

        if($ext == "brstm"){

            return miscController::CreateNus3audioFromBRSTM($request, $looparray);

        }else if($ext == "lopus"){

            if ($filetype == "nus3audio") {
                return nus3audioController::lopusToNus3audio($request);
            }else if ($filetype == "idsp") {
                return idspController::lopusToIDSP($request);
            } else {
                $status = '<p class="card-text">Please select a valid file type!</p>';
                return redirect()->back()->with('error', $status);
            };

        }else if($ext == "idsp"){
            if ($filetype == "lopus") {
                return lopusController::idspToLopus($request, $looparray);
            } else {
                $status = '<p class="card-text">Please select a valid file type!</p>';
                return redirect()->back()->with('error', $status);
            };
        }
        else{
            if ($filetype == "nus3audio") {
                return nus3audioController::Createnus3audio($request, $looparray);
            } else if ($filetype == "lopus") {
                return lopusController::Createlopus($request, $looparray);
            } else if ($filetype == "idsp") {
                return idspController::Createidsp($request, $looparray);
            }else if ($filetype == "toBrstm") {
                return brstmController::CreateBRSTM($request, $looparray);
            } else {
                $status = '<p class="card-text">Please select a valid file type!</p>';
                return redirect()->back()->with('error', $status);
            };
        }
    }

    public function smashCustomMusicExt($id, $loop){

        if(strpos($_SERVER['HTTP_USER_AGENT'],'bot')!==false) {
            http_response_code(403);
            die('Please read the /robots.txt file.');
        }

        $context = stream_context_create(array(
            'http' => array(
                'ignore_errors' => true,
                'header' => "User-Agent:SmashUltimateTools/1.0\r\n",
            ),
        ));

        $page = file_get_contents("https://smashcustommusic.net/json/song/${id}", false, $context);

        $json_output = json_decode($page);

        if(!$json_output->{"ok"}){
            die("Failed getting json! Error Code: {$json_output->{"error"}}");
        }

        $name = $id;

        $BTN = new brstmtonus3audio();

        $BTN->filename = $name;

        $BTN->save();

        $tmp_path = public_path() . "/storage/audio/normalBTN/{$BTN->id}/";

        File::makeDirectory($tmp_path, 0777, true, true);

        $path = public_path() . "/storage/audio/normalBTN/{$BTN->id}/{$name}.brstm";

        $context = stream_context_create(array(
            'http' => array(
                'ignore_errors' => true,
                'header' => "User-Agent:SmashUltimateTools/1.0\r\n",
            ),
        ));

        $brstm_file = file_get_contents("https://smashcustommusic.net/brstm/{$id}", false, $context);

        file_put_contents($path, $brstm_file);

        $BTN->save();

        $filename = $name;

        $tmp_path_1 = public_path() . "/storage/audio/fixedBTN/{$BTN->id}/";

        $tmp_path_2 = public_path() . "/storage/audio/tmpBTN/{$BTN->id}/";

        File::makeDirectory($tmp_path_1, 0777, true, true);

        File::makeDirectory($tmp_path_2, 0777, true, true);

        $BTN->log = shell_exec("%CD%/convert/test/test.exe -o \"%CD%/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav\" -i \"{$path}\" ");

        $BTN->log2 = shell_exec("%CD%/convert/sox/sox.exe \"%CD%/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav\" -r 48000 \"%CD%/storage/audio/fixedBTN/{$BTN->id}/{$filename}.wav\"");

        $sample_rate = extraController::sampleCheck(public_path() . "/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav");

        if ($loop == "true"){
            $hz_convert = 48000 / floatval($sample_rate);

            $start = intval(shell_exec("python python3/loop_finder_brstm.py \"{$path}\" start"));

            $end = intval(shell_exec("python python3/loop_finder_brstm.py \"{$path}\" end"));

            $BTN->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);

            $BTN->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
        }

        // return "{$id} - {$name} - {$og_song} - {$loop} - {$path} - https://smashcustommusic.net/brstm/{$id}";

        $BTN->hz = "64000";

        $BTN->stage = $json_output->{"name"};


        if($BTN->end_loop == 0){
            $BTN->end_loop = extraController::getSamples(public_path() . "/storage/audio/fixedBTN/{$BTN->id}/{$filename}.wav");
        }

        $BTN->save();

        if ($loop == "true") {
            $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" -l {$BTN->start_loop}-{$BTN->end_loop} --bitrate \"64000\" --CBR --opusheader namco ");
        } else {
            $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" --bitrate \"64000\" --CBR --opusheader namco ");
        }

        $fileOutput = $name;

        $tmp_path = shell_exec("echo %CD%/storage/audio/BTN/{$BTN->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe %CD%/convert/base.nus3audio -r 0 %CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus -w \"%CD%/storage/audio/BTN/{$BTN->id}/{$fileOutput}.nus3audio\"");

        $BTN->log = $log;

        $BTN->log2 = $log2;

        $BTN->save();

        return Response::download(public_path() . "/storage/audio/BTN/{$BTN->id}/{$fileOutput}.nus3audio", extraController::clean_brstm($BTN->stage) . ".nus3audio");
    }
}
