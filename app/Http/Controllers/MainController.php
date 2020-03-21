<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Audio;
use App\AudioNUS3AUDIO;
use App\brstm;
use App\brstmtonus3audio;
use App\nus3audio_replace;
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

    public function viewBrstm(){
        return view('audio/brstm_to_wav');
    }

    public function viewSoundBank(){
        return view('audio/audio_replacement');
    }

    public function FindType(Request $request)
    {
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
            } else {
                $status = '<p class="card-text">Please select a valid file type!</p>';
                return redirect()->back()->with('error', $status);
            };
        }
    }
}
