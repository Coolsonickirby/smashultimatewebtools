<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Audio;
use App\brstm;
use App\brstmtonus3audio;
use App\nus3audio_replace;
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

        $path_tmp = $file->storeAs('public/normal/' . $audio->id, extraController::keep_english($file->getClientOriginalName()));

        $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

        $filename = pathinfo($path_tmp, PATHINFO_FILENAME);

        $tmp_path_1 = shell_exec("echo %CD%/storage/fixedwav/{$audio->id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $audio->log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/fixedwav/{$audio->id}/{$filename}.wav\"");

        $audio->save();
        $status = '<p class="card-text">Music Conversion Complete! You can download it from <a class="return_link" href="/storage/fixedwav/' . $audio->id . '/' . $filename .'.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/wav_hz_change/' . $audio->id . '">click here.</a></p>';

        return redirect()->back()->with('success', $status);
    }

    public static function ConvertBrstm(Request $request){
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        if($request->file('music')->getClientOriginalExtension() == "brstm" || $request->file('music')->getClientOriginalExtension() == "idsp" || $request->file('music')->getClientOriginalExtension() == "lopus"){
            $brstm = new brstm;

            $file = $request->file('music');

            $brstm->filename = $file->getClientOriginalName();

            $brstm->save();

            $path_tmp = $file->storeAs('public/normalbrstm/' . $brstm->id, extraController::keep_english($file->getClientOriginalName()));

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

            $status = '<p class="card-text">Music Conversion Complete! You can download it from <a class="return_link" href="/storage/fixedbrstm/' . $brstm->id . '/' . $filename . '.wav">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/brstm/' . $brstm->id . '">click here.</a></p>';

            return redirect()->back()->with('success', $status);
        }else{
            $status = '<p class="card-text">Please upload a valid file type (brstm, idsp, lopus)!</p>';
            return redirect()->back()->with('error', $status);
        }

    }

    public static function CreateNus3audioFromBRSTM($request, $looparray){

        $BTN = new brstmtonus3audio();

        $file = $request->file('music');

        $BTN->filename = $file->getClientOriginalName();

        $BTN->save();

        $path_tmp = $file->storeAs('public/normalBTN/' . $BTN->id, extraController::keep_english($file->getClientOriginalName()));

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

        $sample_rate = extraController::sampleCheck(public_path() . "/storage/tmpBTN/{$BTN->id}/{$filename}.wav");

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
            $BTN->end_loop = extraController::getSamples(public_path() . "/storage/fixedBTN/{$BTN->id}/{$filename}.wav");
        }

        $BTN->save();

        if ($request->input("loop") == "on") {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/lopusBTN/{$BTN->id}/output.lopus\" -l {$BTN->start_loop}-{$BTN->end_loop} --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/lopusBTN/{$BTN->id}/output.lopus\" -l {$BTN->start_loop}-{$BTN->end_loop} --bitrate \"48000\" --CBR --opusheader namco ");
            }
        } else {
            if ($request->input("advanced") == "on") {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/lopusBTN/{$BTN->id}/output.lopus\" --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
            } else {
                $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$tmp_path_1}/{$filename}.wav\" -o \"%CD%/storage/lopusBTN/{$BTN->id}/output.lopus\" --bitrate \"48000\" --CBR --opusheader namco ");
            }
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        $tmp_path = shell_exec("echo %CD%/storage/BTN/{$BTN->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $log2 = shell_exec("%CD%/convert/nus3audio.exe %CD%/convert/base.nus3audio -r 0 %CD%/storage/lopusBTN/{$BTN->id}/output.lopus -w %CD%/storage/BTN/{$BTN->id}/{$fileOutput}.nus3audio");

        $BTN->log = $log;

        $BTN->log2 = $log2;

        $BTN->save();

        $status = '<p class="card-text">brstm to nus3audio Conversion Complete! You can download it from <a class="return_link" href="/storage/BTN/'. $BTN->id . '/' . $fileOutput . '.nus3audio">here!</a></p> <br> <p class="card-text">For more information about the conversion, <a class="return_link" href="/details/brstm_to_nus3audio/' . $BTN->id . '">click here.</a></p>';

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

            $path_tmp = $file->storeAs('public/nus3audio_replace/' . $nus3audio_replace->id, extraController::keep_english($file->getClientOriginalName()));

            $path = public_path() . '/' . str_replace("public", "storage", $path_tmp);

            $folder_path = public_path() . "/storage/nus3audio_replace/{$nus3audio_replace->id}/output";

            File::MakeDirectory($path, 0777, true, true);

            $nus3audio_replace->nus3audio_info = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -p");

            $nus3audio_replace->log = shell_exec("%CD%/convert/nus3audio.exe \"{$path}\" -i \"{$folder_path}\" ");

            $i = 0;

            $files_name = [];

            $files_id = [];

            foreach($request->file("files") as $file_input){
                $file_id = extraController::keepNumbers($request->input("files_id")[$i]);

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
            Replacment complete! You can download the file from <a class=\"return_link\" href=\"/storage/nus3audio_replace/{$nus3audio_replace->id}/{$nus3audio_replace->filename}\">here!</a>
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
}
