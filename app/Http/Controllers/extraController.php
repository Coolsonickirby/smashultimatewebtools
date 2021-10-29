<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use App\youtubeConversion;
use App\minecraftSkinConverter;

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

    public static function resample48($id, $name, $path, $sample_rate = "48000"){

        $tmp_path_1 = shell_exec("echo %CD%/storage/audio/{$name}/{$id}/");

        File::makeDirectory($tmp_path_1, 0777, true, true);

        $log = shell_exec("%CD%/convert/sox/sox.exe \"{$path}\" -r {$sample_rate} -b 16 \"%CD%/storage/audio/{$name}/{$id}/output.wav\"");

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

    public static function clean_brstm($string){
        return preg_replace('/[\:\?\#\|\<\>\/\.\-\^\*\%\\\]/', ' ', $string);
    }

    public static function errorCheck($arr, $log){
        if($arr[0] == "The" && $arr[1] == "loop"){
            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return [true, $status];
        }else if($arr[0] == "Loop" && $arr[1] == "points"){
            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return [true, $status];
        }else if($arr[0] == "Error" && $arr[1] == "parsing"){
            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return [true, $status];
        }else if($arr[0] == "Must" && $arr[1] == "have"){
            $status = '<p class="card-text"><pre>' . $log . '</pre></p>';
            return [true, $status];
        }else{
            return [false, "nothing"];
        }
    }

    public static function getYoutubeIdFromUrl($url) {
        $parts = parse_url($url);
        if(isset($parts['query'])){
            parse_str($parts['query'], $qs);
            if(isset($qs['v'])){
                return $qs['v'];
            }else if(isset($qs['vi'])){
                return $qs['vi'];
            }
        }
        if(isset($parts['path'])){
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path)-1];
        }
        return false;
    }

    public static function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public static function HH_MM_SS_ms_conversion($time){
        $result = explode(":", $time);

        $HH_to_MM = intval($result[0]) * 60;

        $MM_plus_HH = intval($result[1]) + $HH_to_MM;

        return "{$MM_plus_HH}:{$result[2]}";
    }

    public static function youtubeDurationCheck($youtube_duration){
        $max_limit_seconds = 3600;
        $duration_explode = explode(":", $youtube_duration);
        $count = count($duration_explode);
        $total_seconds = intval(end($duration_explode));

        if($count == 3){
            $h_t_s = intval($duration_explode[0]) * 3600;
            $m_t_s = intval($duration_explode[1]) * 60;

            $total_seconds = $total_seconds + $h_t_s + $m_t_s;
        }else if($count == 2){
            $m_t_s = intval($duration_explode[0]) * 60;

            $total_seconds = $total_seconds + $m_t_s;
        }

        if($total_seconds > $max_limit_seconds){
            return false;
        }else{
            return true;
        }
    }

    public static function youtubeToNus3audio(Request $request){
        return "This is a wip";
        $youtube_Main = new youtubeConversion();

        $youtube_dl = "python %CD%\convert\youtube-dl\youtube-dl --cookies C:\cookies.txt";

        $youtube_id = extraController::getYoutubeIdFromUrl($request->input("yt_link"));

        $youtube_url = "https://www.youtube.com/watch?v={$youtube_id}";

        $youtube_duration = shell_exec("{$youtube_dl} --no-warnings --get-duration {$youtube_url} 2>&1");

        if(!extraController::youtubeDurationCheck($youtube_duration)){
            return "man what the fuck are you trying to kill my server for????";
        }

        $youtube_title = shell_exec("{$youtube_dl} -e {$youtube_url}");

        $youtube_Main->video_title = $youtube_title;
        $youtube_Main->video_id = $youtube_id;

        $youtube_Main->save();

        $out_path_webm = public_path() . "/storage/audio/youtubeOriginal/{$youtube_Main->id}/out.webm";

        //Create this path with mkdir
        $out_path_opus = public_path() . "/storage/audio/youtubeOpus/{$youtube_Main->id}/";

        File::makeDirectory($out_path_opus, 0777, true, true);

        $out_path_opus = public_path() . "/storage/audio/youtubeOpus/{$youtube_Main->id}/out.opus";

        $youtube_dl = shell_exec("{$youtube_dl} -f bestaudio[ext=webm] -o \"{$out_path_webm}\" {$youtube_url} 2>&1");
        return "<pre>{$youtube_dl}</pre>";
        $ffmpeg_extract = shell_exec("ffmpeg -nostdin -y -i \"{$out_path_webm}\" -vn -acodec copy \"{$out_path_opus}\" 2>&1");

        $loop_start = 0;
        $loop_end = 0;

        return "<pre>{$ffmpeg_extract}</pre>";

        if($request->input("loop") == "on"){

            $hz_convert = 1;
            $sample_rate = 48000;

            $start = $request->input("start_loop");

            $end = $request->input("end_loop");

            if($start == ""){
                $start = 0;
            }

            if($end == ""){
                $end = extraController::HH_MM_SS_ms_conversion(extraController::get_string_between($ffmpeg_extract, "Duration: ", ","));
            }

            if(strpos($start, ":") !== false || strpos($start, ".") !== false){
                $start = extraController::time_to_samples($start, $sample_rate);
                $loop_start = $start * $hz_convert;
            }else{
                $loop_start = intval(extraController::keepNumbers($start) * $hz_convert);
            }

            if(strpos($end, ":") !== false || strpos($end, ".") !== false){
                $end = extraController::time_to_samples($end, $sample_rate);
                $loop_end = $end * $hz_convert;
            }else{
                $loop_end = intval(extraController::keepNumbers($end) * $hz_convert);
            }

        }else{
            $loop_start = 0;
            $loop_end = 0;
        }

        $default = config('audio.lopus_bitrate');

        $output_lopus = public_path() . "/storage/audio/youtubeLopus/{$youtube_Main->id}/";

        File::makeDirectory($output_lopus, 0777, true, true);

        $output_lopus = public_path() . "/storage/audio/youtubeLopus/{$youtube_Main->id}/output.lopus";

        if ($request->input("advanced") == "on") {
            $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$out_path_opus}\" -o \"{$output_lopus}\"   --bitrate \"{$request->input("hz")}\" --CBR --opusheader namco ");
        } else {
            $log = shell_exec("%CD%/convert/VGAudioCli.exe -i \"{$out_path_opus}\" -o {$output_lopus} --bitrate \"{$default}\" --CBR --opusheader namco ");
        }

        $youtube_Main->log = $log;

        $youtube_Main->save();

        if (!(strpos($log, 'Success') !== false)) {
            return redirect()->back()->with('error', "<p>Ran into an error! Error:\n<pre>{$log}</pre></p>");
        }

        if ($request->input("loop") == "on") {
            $python_log = shell_exec("python %CD%\python3\change_lopus_loop.py {$output_lopus} {$loop_start} {$loop_end}");
        }

        $fileOutput = extraController::keep_english($request->input("filenameOutput"));

        $tmp_path = shell_exec("echo %CD%/storage/audio/youtubeNus3audio/{$youtube_Main->id}/");

        File::makeDirectory($tmp_path, 0777, true, true);

        $nus3audio_log = shell_exec("%CD%/convert/nus3audio.exe \"%CD%/convert/base.nus3audio\" -r 0 \"{$output_lopus}\" -w \"%CD%/storage/audio/youtubeNus3audio/{$youtube_Main->id}/{$fileOutput}.nus3audio\" 2>&1");

        $youtube_Main->loop_start = $loop_start;
        $youtube_Main->loop_end = $loop_end;

        $youtube_Main->save();

        $status = "
            <p class=\"card-text\">
            YouTube to nus3audio conversion complete! You can download the file from <a class=\"return_link\" href=\"/storage/audio/youtubeNus3audio/{$youtube_Main->id}/{$fileOutput}.nus3audio\">here!</a>
            <br>
            I'm sorry TNN
            </p>";

        //return $status;
        return redirect()->back()->with('success', $status);
    }

    public static function get_http_response_code($url) {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }

    public static function javaToSmash(Request $request){
        $convert = new minecraftSkinConverter();

        $convert->user_name = $request->input("java_user");

        // var get_uuid_url = `api.mojang.com/users/profiles/minecraft/${user_name}`;

        // var get_profile_url = "sessionserver.mojang.com/session/minecraft/profile/";

        $result = @file_get_contents("http://api.mojang.com/users/profiles/minecraft/{$convert->user_name}");

        if($result === false){
            return "Please enter a valid Minecraft username! If you do and this still shows up, then please contact Coolsonickirby#4030 on discord with the following code!<br>Code: 030805";
        }else{
            $skin_id = json_decode($result)->{"id"};
            $result = @file_get_contents("http://sessionserver.mojang.com/session/minecraft/profile/{$skin_id}");
            if($result === false){
                return "Please enter a valid Minecraft username! If you do and this still shows up, then please contact Coolsonickirby#4030 on discord with the following code!<br>Code: 030810";
            }else{
                $json_obj = json_decode($result, true);
                $json_skins = json_decode(base64_decode($json_obj["properties"][0]["value"]), true);
                $convert->skin_url = $json_skins["textures"]["SKIN"]["url"];
            }
        }

        $convert->save();

        $tmp_path = public_path() . "/storage/skins/javaOriginal/{$convert->id}/";

        File::makeDirectory($tmp_path, 0777, true, true);

        $og_skin_path = public_path() . "/storage/skins/javaOriginal/{$convert->id}/original.png";

        $skin_file = file_get_contents($convert->skin_url);

        file_put_contents($og_skin_path, $skin_file);

        shell_exec("%CD%/convert/img2nutexb/minecraft_skin_fixer.exe {$og_skin_path}");
        shell_exec("C:\image_magick\magick.exe {$og_skin_path} -background \"#6A6A6A\" -flatten {$og_skin_path}");

        $tmp_path = public_path() . "/storage/skins/javaConverted/{$convert->id}/";

        File::makeDirectory($tmp_path, 0777, true, true);

        $nutexb_skin_path = $tmp_path . "def_pickel_001_col.nutexb";

        shell_exec("%CD%/convert/img2nutexb/img2nutexb.exe {$og_skin_path} {$nutexb_skin_path} --name def_pickel_001_col");

        return redirect("/storage/skins/javaConverted/{$convert->id}/def_pickel_001_col.nutexb");
    }
}
