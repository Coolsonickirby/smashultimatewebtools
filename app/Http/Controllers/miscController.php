<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Audio\Audio;
use App\Models\Audio\brstm;
use App\Models\Audio\brstmtonus3audio;
use App\Models\Audio\nus3audio_replace;
use App\zipToIDSP;
use App\zipToNus3audio;
use File;
use Validator;

class miscController extends Controller
{
    public static function convertMusic(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }
        $audio = new Audio;

        $file = $request->file('music');

        $audio->filename = $file->getClientOriginalName();

        $audio->save();

        $path_tmp = $file->storeAs('public/audio/normal/' . $audio->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = shell_exec("echo %CD%/storage/audio/fixedwav/{$audio->id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $audio->log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/audio/fixedwav/{$audio->id}/{$filename}.wav\"");

        $audio->save();
        $status = '<p class="card-text">Music Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/fixedwav/' . $audio->id . '/' . $filename .'.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/wav_hz_change/' . $audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public static function ConvertVGMStream(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        $brstm = new brstm;

        $file = $request->file('music');

        $brstm->filename = $file->getClientOriginalName();

        $brstm->save();

        $path_tmp = $file->storeAs('public/audio/normalbrstm/' . $brstm->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = shell_exec("echo %CD%/storage/audio/fixedbrstm/{$brstm->id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $subSong = intval($request->input("subSong"));

        $brstm->log = shell_exec("%CD%/convert/test/test.exe -o \"%CD%/storage/audio/fixedbrstm/{$brstm->id}/{$filename}.wav\" -s {$subSong} -i \"{$path}\"");

        $array_log = [
            "Original Song Filename", $filename,
            "Sub Song" => $subSong
        ];

        $brstm->log2 = json_encode($array_log);
        $brstm->save();

        $status = '<p class="card-text">Music Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/fixedbrstm/' . $brstm->id . '/' . $filename . '.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/vgmstream/' . $brstm->id . '">click here.</a></p><br> <label>vgmstream log:</label><pre>' . $brstm->log . '</pre>';

        return redirect()->back()->with('success', $status);
    }

    public static function CreateNus3audioFromBRSTM($request, $looparray){

        $BTN = new brstmtonus3audio();

        $file = $request->file('music');

        $BTN->filename = $file->getClientOriginalName();

        $BTN->save();

        $path_tmp = $file->storeAs('public/audio/normalBTN/' . $BTN->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = public_path() . "/storage/audio/fixedBTN/{$BTN->id}/";

        $tmp_path_2 = public_path() . "/storage/audio/tmpBTN/{$BTN->id}/";

        File::makeDirectory($tmp_path_1, 0777, true, true);

        File::makeDirectory($tmp_path_2, 0777, true, true);

        $BTN->log = shell_exec("%CD%/convert/test/test.exe -o \"%CD%/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav\" -i \"{$path}\" ");

        $BTN->log2 = shell_exec("%CD%/convert/sox/sox.exe \"%CD%/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav\" -r 48000 \"%CD%/storage/audio/fixedBTN/{$BTN->id}/{$filename}.wav\"");

        $BTN->start_loop = $looparray[0];

        $BTN->end_loop = $looparray[1];

        $sample_rate = extraController::sampleCheck(public_path() . "/storage/audio/tmpBTN/{$BTN->id}/{$filename}.wav");

        if($request->input("sampleHZinput") == "auto"){
            if($request->input("loop") == "on"){

                $hz_convert = 48000 / floatval($sample_rate);

                if($request->input("loop_type") == "auto"){
                    $start = intval(shell_exec("python python3/loop_finder_brstm.py \"{$path}\" start"));

                    $end = intval(shell_exec("python python3/loop_finder_brstm.py \"{$path}\" end"));
                }else{
                    $start = $request->input("start_loop");

                    $end = $request->input("end_loop");
                }

                if(strpos($start, ":") !== false || strpos($start, ".") !== false){
                    $start = extraController::time_to_samples($start, $sample_rate);
                    $BTN->start_loop = $start * $hz_convert;
                }else{
                    $BTN->start_loop = intval(extraController::keepNumbers($start) * $hz_convert);
                }

                if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                    $end = extraController::time_to_samples($end, $sample_rate);
                    $BTN->end_loop = $end * $hz_convert;
                }else{
                    $BTN->end_loop = intval(extraController::keepNumbers($end) * $hz_convert);
                }

            }else{
                $BTN->start_loop = 0;
                $BTN->end_loop = 0;
            }
        }

        $BTN->hz = $request->input("hz");

        $BTN->stage = $request->input("filenameOutput");


        if($BTN->end_loop == 0){
            $BTN->end_loop = extraController::getSamples(public_path() . "/storage/audio/fixedBTN/{$BTN->id}/{$filename}.wav");
        }

        $BTN->save();

        $default = config('audio.lopus_bitrate');

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" -l {$BTN->start_loop}-{$BTN->end_loop} --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" -l {$BTN->start_loop}-{$BTN->end_loop} --bitrate \"{$default}\" --CBR --opusheader namco ");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" --bitrate \"{$default}\" --CBR --opusheader namco ");
            }
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        $tmp_path = shell_exec("echo %CD%/storage/audio/BTN/{$BTN->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $nus3audio_name = str_replace("bgm_", "", $fileOutput);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe -n -A \"{$nus3audio_name}\" \"%CD%/storage/audio/lopusBTN/{$BTN->id}/output.lopus\" -w \"%CD%/storage/audio/BTN/{$BTN->id}/{$fileOutput}.nus3audio\"");

        $BTN->log = $log;

        $BTN->log2 = $log2;

        $BTN->save();

        $status = '<p class="card-text">brstm to nus3audio Conversion Complete! You can download it from <a class="return_link" href="/storage/audio/BTN/'. $BTN->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/brstm_to_nus3audio/' . $BTN->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
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

            $clean_filename = extraController::keep_english($file->getClientOriginalName());

            $path_tmp = $file->storeAs('public/audio/nus3audio_replace/' . $nus3audio_replace->id, $clean_filename);

            $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

            $folder_path = public_path() . "/storage/audio/nus3audio_replace/{$nus3audio_replace->id}/output";

            File::MakeDirectory($path, 0777, true, true);

            $nus3audio_replace->nus3audio_info = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -p");

            $nus3audio_replace->log = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -i \"{$folder_path}\" ");

            $i = 0;

            $files_name = [];

            $files_id = [];

            foreach($request->file("files") as $file_input){
                $file_id = extraController::keepNumbers($request->input("files_id")[$i]);

                $check = "public/audio/nus3audio_replace/{$nus3audio_replace->id}/output/{$file_id}.{$file_input->getClientOriginalExtension()}";

                if(Storage::exists($check)){
                    Storage::delete($check);
                }

                if($file_input->getClientOriginalExtension() == "idsp" || $file_input->getClientOriginalExtension() == "lopus"){
                    $tmp = $file_input->storeAs('public/audio/nus3audio_replace/' . $nus3audio_replace->id . '/output', $file_id.".".$file_input->getClientOriginalExtension());

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

            $nus3audio_replace->log2 = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" --rebuild-id \"{$folder_path}\" -w \"{$path}\"");

            $nus3audio_replace->save();

            $status = "
            <p class=\"card-text\">
            Replacment complete! You can download the file from <a class=\"return_link\" href=\"/storage/audio/nus3audio_replace/{$nus3audio_replace->id}/{$clean_filename}\">here!</a>
            <br>
            For more information, you can click <a class=\"return_link\" href=\"/details/nus3audio_replace/{$nus3audio_replace->id}\">here!</a>
            </p>";

            //return $status;
            return redirect()->back()->with('success', $status);
        }else{
            $status = '<p class="card-text">Please upload a valid file (nus3audio)!</p>';
            return redirect()->back()->with('error', $status);
        }
    }

    public static function zipToIDSP(Request $request){
        $zipToIdsp = new zipToIDSP;

        $file = $request->file('zipFile');

        $zipToIdsp->filename = $file->getClientOriginalName();

        $zipToIdsp->hz = $request->input("sample_rate");

        $zipToIdsp->save();

        $clean_filename = extraController::keep_english($file->getClientOriginalName());

        $path_tmp = $file->storeAs('public/audio/zipToIdsp/' . $zipToIdsp->id, $clean_filename);

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $zipToIdspOut = public_path() . "/storage/audio/zipToIdspOut/{$zipToIdsp->id}/out";

        $zipToIdspTmp = public_path() . "/storage/audio/zipToIdspOut/{$zipToIdsp->id}/tmp";

        $zipToIdspRepack = public_path() . "/storage/audio/zipToIdspRepack/{$zipToIdsp->id}/idsp";

        File::MakeDirectory($zipToIdspOut, 0777, true, true);
        File::MakeDirectory($zipToIdspRepack, 0777, true, true);
        File::MakeDirectory($zipToIdspTmp, 0777, true, true);

        $log = [];

        array_push($log, shell_exec("%CD%/convert/tar/bsdtar.exe -x -f \"{$path}\" -C \"{$zipToIdspOut}\""));

        $volume = 0.0;

        if($request->input("volume_control") != ""){
            $volume = floatval($request->input("volume_control"));
        }else{
            $volume = 1;
        }

        array_push($log, $volume);

        foreach(scandir($zipToIdspOut) as $file){
            $file_name = pathinfo($file)['filename'];
            array_push($log, shell_exec("%CD%/convert/sox/sox.exe -v {$volume} \"{$zipToIdspOut}/{$file}\" -r {$zipToIdsp->hz} \"{$zipToIdspTmp}/tmp.wav\""));
            array_push($log, shell_exec("%CD%/convert/VGAudioCli.exe -i  \"{$zipToIdspTmp}/tmp.wav\" -o \"{$zipToIdspRepack}/{$file_name}.idsp\""));
        }

        array_push($log, shell_exec("%CD%/convert/tar/bsdtar.exe -a -c -C \"{$zipToIdspRepack}/..\" -f \"{$zipToIdspRepack}/../out.zip\" \"idsp\""));


        $zipToIdsp->log = $log;

        $status = "
            <p class=\"card-text\">
            Batch Conversion complete! You can download the file from <a class=\"return_link\" href=\"/storage/audio/zipToIdspRepack/{$zipToIdsp->id}/out.zip\">here!</a>
            <br>
            For more information, you can click <a class=\"return_link\" href=\"/details/zipToIdsp/{$zipToIdsp->id}\">here!</a>
            </p>";

        //return $status;
        return redirect()->back()->with('success', $status);
    }

    public static function zipToNus3audio(Request $request){


        $zipToNus3 = new zipToNus3audio;

        $zipFile = $request->file('zipFile');
        $nus3File = $request->file('nus3File');

        $zipToNus3->zipFilename = $zipFile->getClientOriginalName();
        $zipToNus3->nus3Filename = $nus3File->getClientOriginalName();

        $zipToNus3->save();


        $clean_zipFilename = extraController::keep_english($zipFile->getClientOriginalName());

        $clean_nus3Filename = extraController::keep_english($nus3File->getClientOriginalName());

        $path_zip = $zipFile->storeAs('public/audio/zipToNus3audio/' . $zipToNus3->id, $clean_zipFilename);
        $path_zip = public_path() . '/' . str_replace("public", "storage", $path_zip);


        $path_nus3 = $nus3File->storeAs('public/audio/zipToNus3audio/' . $zipToNus3->id, $clean_nus3Filename);
        $path_nus3 = public_path() . '/' . str_replace("public", "storage", $path_nus3);

        $zipToNus3Out = public_path() . "/storage/audio/zipToNus3audio/{$zipToNus3->id}/out";
        File::MakeDirectory($zipToNus3Out, 0777, true, true);

        $log = [];

        array_push($log, shell_exec("%CD%/convert/tar/bsdtar.exe -x -f \"{$path_zip}\" -C \"{$zipToNus3Out}\""));
        array_push($log, shell_exec("%CD%/convert/nus3audio.exe \"{$path_nus3}\" --rebuild-id \"{$zipToNus3Out}\" -w \"{$path_nus3}\""));

        $zipToNus3->log = $log;

        $zipToNus3->save();

        $status = "
        <p class=\"card-text\">
        Batch Replacement complete! You can download the file from <a class=\"return_link\" href=\"/storage/audio/zipToNus3audio/{$zipToNus3->id}/{$clean_nus3Filename}\">here!</a>
        <br>
        For more information, you can click <a class=\"return_link\" href=\"/details/zipToNus3audio/{$zipToNus3->id}\">here!</a>
        </p>";

        //return $status;
        return redirect()->back()->with('success', $status);
    }
}
