<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Audio\Audio;
use App\Models\Audio\AudioNUS3AUDIO;
use App\Models\Audio\brstm;
use App\Models\Audio\brstmtonus3audio;
use App\Models\Audio\nus3audio_replace;
use File;
use Validator;

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
        if($request->file('music') == null){
            $status = '<p class="card-text">Please upload a file!</p>';
            return redirect()->back()->with('error', $status);
        }

        if($request->input("hz") == "test"){
            // $file = fopen($request->file('music'), "rb");

            // $data = fread($file, 5);

            // fclose($file);

            // if(preg_match('/\s/', $request->file('music')->getClientOriginalExtension())){
            //     return "Whitespace found!\n" . $request->file('music')->getClientOriginalExtension();
            // }else{
            //     return "No whitespace found!\n" . $request->file('music')->getClientOriginalExtension();
            // }

            return "hi";

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

        $filetype = $request->input("filetype");

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
}
