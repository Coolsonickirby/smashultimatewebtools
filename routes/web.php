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
    return view('new-main');
});

Route::get('/file-unshared-and-addition', function(){
    return redirect("https://youtu.be/dQw4w9WgXcQ");
});

Route::get('/old', function(){
    return view('main');
});

Route::get('/skinConverter', function(){
    return view('skins/javaToSmash');
});

Route::post('/skinConverter/convert', [
    'uses' => 'extraController@javaToSmash'
]);


//Audio Section
Route::prefix('audio')->group(function () {
    //Views
    Route::get('/', 'MainController@ViewPage');

    Route::get('/wav_hz_change', 'MainController@viewConvert');

    Route::get('/vgmstream', 'MainController@viewVGMStream');

    Route::get('/nus3audio_idsp', 'MainController@viewSoundBank');

    Route::get('/compare', 'extraController@compareFileSize');

    Route::get('/zipToIdsp', 'MainController@viewZipToIdsp');

    Route::get('/zipToNus3audio', 'MainController@viewZipToNus3audio');

    Route::get('/smc/{id}/{loop}/', 'MainController@smashCustomMusicExt');

    //Post Requests
    Route::post('/create', [
        'uses' => 'MainController@FindType'
    ]);

    Route::post('/wav_hz_change/change', [
        'uses' => 'miscController@ConvertMusic'
    ]);

    Route::post('/vgmstream/change', [
        'uses' => 'miscController@ConvertVGMStream'
    ]);

    Route::post('/nus3audio_idsp/replace', [
        'uses' => 'miscController@replacement_nus3audio'
    ]);

    Route::post('/zipToIdsp/convert', [
        'uses' => 'miscController@zipToIdsp'
    ]);

    Route::post('/zipToNus3audio/replace', [
        'uses' => 'miscController@zipToNus3audio'
    ]);
});

//MSBT Section
Route::prefix('msbt')->group(function () {
    Route::get('/{id?}', function ($id = null) {
        return view('msbt/msbt_view');
    });

    Route::get('/update/main', function () {
        return view('msbt/msbt_updater');
    });


    Route::post('/openMSBT', [
        'uses' => 'MSBTController@StoreMSBT'
    ]);

    Route::post('/saveMSBT', [
        'uses' => 'MSBTController@JSONtoMSBT'
    ]);

    Route::post('/update/updateMSBT', [
        'uses' => 'MSBTController@UpdateMSBT'
    ]);
});

//PRC Section
Route::prefix('prc')->group(function () {
    #region CHARA Routes
    Route::get('/Chara/{id?}', function ($id = null) {
        return view('prc/prcChara');
    });

    Route::post('/Chara/openPRC', [
        'uses' => 'prcController@StoreCharaPrc'
    ]);

    Route::post('/Chara/saveJSON', [
        'uses' => 'prcController@JSONtoCharaPrc'
    ]);
    #endregion

    #region STAGE Routes
    Route::get('/Stage/{id?}', function ($id = null) {
        return view('prc/prcStage');
    });

    Route::post('/Stage/openPRC', [
        'uses' => 'prcController@StoreStagePrc'
    ]);

    Route::post('/Stage/saveJSON', [
        'uses' => 'prcController@JSONtoStagePrc'
    ]);
    #endregion

    #region FighterParam Routes
    Route::get('/FighterParam/{id?}', function ($id = null) {
        return view('prc/prcFighterParam');
    });

    Route::post('/FighterParam/openPRC', [
        'uses' => 'prcController@StoreFighterParamPrc'
    ]);

    Route::post('/FighterParam/saveJSON', [
        'uses' => 'prcController@JSONtoFighterParamPrc'
    ]);
    #endregion

    Route::get('/updater/', function () {
        return view('prc/prcUpdater');
        // return redirect("https://youtu.be/dQw4w9WgXcQ");
    });

    Route::post('/updater/submit', [
        'uses' => 'prcController@UpdatePrc'
    ]);
});



//Cheap api that could probably break fast
Route::prefix('api')->group(function () {
    Route::get("/jsonMSBT/{id}", "MSBTController@GetJSON");
    Route::get('/CharaJSON/{id}', "prcController@GetCharaJSON");
    Route::get('/StageJSON/{id}', "prcController@GetStageJSON");
    Route::get('/FighterParamJSON/{id}', "prcController@GetFighterParamJSON");
});

//Details Route
Route::prefix('details')->group(function () {
    Route::get('/nus3audio/{id}', 'detailsController@NUS3AUDIODetails');

    Route::get('/lopus/{id}', 'detailsController@LopusDetails');

    Route::get('/idsp/{id}', 'detailsController@IDSPDetails');

    Route::get('/wav_hz_change/{id}', 'detailsController@CompatibleDetails');

    Route::get('/vgmstream/{id}', 'detailsController@vgmstream');

    Route::get('/brstm_to_nus3audio/{id}', 'detailsController@BrstmToNus3audioDetails');

    Route::get('/nus3audio_replace/{id}', 'detailsController@replacement_nus3audio_details');

    Route::get('/brstm/{id}', 'detailsController@audioToBRSTM');

    Route::get('/zipToIdsp/{id}', 'detailsController@zipToIdsp');

    Route::get('/zipToNus3audio/{id}', 'detailsController@zipToNus3audio');
});
