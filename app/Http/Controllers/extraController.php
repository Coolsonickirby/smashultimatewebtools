<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class extraController extends Controller
{
    public static function sampleCheck($path){
        $sample_rate = shell_exec('python python3/sample.py "' . $path . '" ');

        return intval($sample_rate);
    }

    public static function getSamples($path){
        $sample_length = shell_exec('python python3/sample_length.py "' . $path . '" ');

        return intval($sample_length);
    }

    public static function resample48($id, $name, $path){

        $tmp_path_1 = shell_exec("echo %CD%/storage/audio/{$name}/{$id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r 48000 \"%CD%/storage/audio/{$name}/{$id}/output.wav\"");

        return public_path() . "/storage/audio/{$name}/{$id}/output.wav";
    }

    public static function convert_to_wav($id, $name, $path){
        $tmp_path_1 = shell_exec("echo %CD%/storage/audio/{$name}/{$id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" \"%CD%/storage/audio/{$name}/{$id}/output.wav\"");

        return public_path() . "/storage/audio/{$name}/{$id}/output.wav";
    }



    public static function keepNumbers($string){
        $string = preg_replace('/[^0-9]/','',$string);
        return $string;
    }

    public static function cleanInput($string){
        $string = preg_replace('/[^a-zA-Z0-9_]/', "_", $string);
        return $string;
    }

    public static function time_to_samples($time, $sample_rate){

        if(strpos($time, ':') != true){
            $time = "0:" . $time;
        }

        $time_mm = intval(explode(':', $time)[0]);

        $time_ss_ms = floatval(explode(':', $time)[1]);

        $time_converted = ($time_mm * 60) + $time_ss_ms;

        $converted_time = floatval($time_converted) * intval($sample_rate);

        return $converted_time;
    }

    public static function keep_english($string){
        return preg_replace('/[^A-Za-z0-9.-_]/', '', $string);
    }

    public static function compareFileSize(){
        return view('audio/compare');
    }
}
