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

//Main Section
Route::get('/', function(){
    return view('main');
});

//Audio Section
Route::prefix('audio')->group(function () {
    //Views
    Route::get('/', 'MainController@ViewPage');

    Route::get('/wav_hz_change', 'MainController@viewConvert');

    Route::get('/brstm_to_wav', 'MainController@viewBrstm');

    Route::get('/nus3audio_idsp', 'MainController@viewSoundBank');

    //Details
    Route::get('/details/nus3audio/{id}', 'detailsController@NUS3AUDIODetails');

    Route::get('/details/lopus/{id}', 'detailsController@LopusDetails');

    Route::get('/details/idsp/{id}', 'detailsController@IDSPDetails');

    Route::get('/details/wav_hz_change/{id}', 'detailsController@CompatibleDetails');

    Route::get('/details/brstm/{id}', 'detailsController@BrstmDetails');

    Route::get('/details/brstm_to_nus3audio/{id}', 'detailsController@BrstmToNus3audioDetails');

    Route::get('/details/nus3audio_replace/{id}', 'detailsController@replacement_nus3audio_details');

    Route::get('/compare', 'extraController@compareFileSize');

    //Post Requests
    Route::post('/create', [
        'uses' => 'MainController@FindType'
    ]);

    Route::post('/wav_hz_change/change', [
        'uses' => 'miscController@ConvertMusic'
    ]);

    Route::post('/brstm_to_wav/change', [
        'uses' => 'miscController@ConvertBRSTM'
    ]);

    Route::post('/nus3audio_idsp/replace', [
        'uses' => 'miscController@replacement_nus3audio'
    ]);
});

//MSBT Section
Route::prefix('msbt')->group(function () {
    Route::get('/{id?}', function ($id = null) {
        return view('msbt/msbt_view');
    });


    Route::post('/openMSBT', [
        'uses' => 'MSBTController@StoreMSBT'
    ]);

    Route::post('/saveMSBT', [
        'uses' => 'MSBTController@JSONtoMSBT'
    ]);
});

//PRC Section
Route::prefix('prc')->group(function () {
    Route::get('/Chara/{id?}', function ($id = null) {
        return view('prc/prcChara');
    });


    Route::post('/openCharaPRC', [
        'uses' => 'prcController@StoreCharaPrc'
    ]);

    Route::post('/Chara/saveJSON', [
        'uses' => 'prcController@JSONtoCharaPrc'
    ]);
});



//Cheap api that could probably break fast
Route::prefix('api')->group(function () {
    Route::get("/jsonMSBT/{id}", "MSBTController@GetJSON");
    Route::get('/CharaJSON/{id}', "prcController@GetJSON");
});
