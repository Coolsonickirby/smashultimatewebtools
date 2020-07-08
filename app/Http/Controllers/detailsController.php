<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio\Audio;
use App\Models\Audio\AudioNUS3AUDIO;
use App\Models\Audio\AudioLopus;
use App\Models\Audio\AudioIDSP;
use App\Models\Audio\brstm;
use App\Models\Audio\brstmtonus3audio;
use App\Models\Audio\nus3audio_replace;
use App\Models\Audio\audioToBRSTM;

class detailsController extends Controller
{
    public function NUS3AUDIODetails($id)
    {
        $id = extraController::keepNumbers($id);
        $nus3audio = AudioNUS3AUDIO::where("id", $id)->first();
        return $nus3audio;
    }

    public function LopusDetails ($id){
        $id = extraController::keepNumbers($id);
        $lopus = AudioLopus::where("id", $id)->first();
        return $lopus;
    }

    public function IDSPDetails($id)
    {
        $id = extraController::keepNumbers($id);
        $idsp = AudioIDSP::where("id", $id)->first();
        return $idsp;
    }

    public function CompatibleDetails($id)
    {
        $id = extraController::keepNumbers($id);
        $audio = Audio::where("id", $id)->first();
        return $audio;
    }

    public function vgmstream($id)
    {
        $id = extraController::keepNumbers($id);
        $brstm = brstm::where("id", $id)->first();
        return $brstm;
    }

    public function replacement_nus3audio_details($id){
        $id = extraController::keepNumbers($id);
        $nus3audio_replace = nus3audio_replace::where("id", $id)->first();
        return $nus3audio_replace;
    }

    public function BrstmToNus3audioDetails($id){
        $id = extraController::keepNumbers($id);
        $brstm_to_nus3audio = brstmtonus3audio::where("id", $id)->first();
        return $brstm_to_nus3audio;
    }

    public function audioToBRSTM($id){
        $id = extraController::keepNumbers($id);
        $audioToBrstm = audioToBRSTM::where("id", $id)->first();
        return $audioToBrstm;
    }
}
