<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Views
Route::get('/', 'MainController@ViewPage');

Route::get('/wav_hz_change', 'MainController@viewConvert');

Route::get('/brstm_to_wav', 'MainController@viewBrstm');

Route::get('/nus3audio_idsp', 'MainController@viewSoundBank');

//Details
Route::get('/details/nus3audio/{id}', 'MainController@NUS3AUDIODetails');

Route::get('/details/lopus/{id}', 'MainController@LopusDetails');

Route::get('/details/idsp/{id}', 'MainController@IDSPDetails');

Route::get('/details/wav_hz_change/{id}', 'MainController@CompatibleDetails');

Route::get('/details/brstm/{id}', 'MainController@BrstmDetails');

Route::get('/details/brstm_to_nus3audio/{id}', 'MainController@BrstmToNus3audioDetails');

Route::get('/details/nus3audio_replace/{id}', 'MainController@replacement_nus3audio_details');

//Post Requests
Route::post('/create', [
    'uses' => 'MainController@FindType'
]);

Route::post('/wav_hz_change/change', [
    'uses' => 'MainController@ConvertMusic'
]);

Route::post('/brstm_to_wav/change', [
    'uses' => 'MainController@ConvertBRSTM'
]);

Route::post('/nus3audio_idsp/replace', [
    'uses' => 'MainController@replacement_nus3audio'
]);
