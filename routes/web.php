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


Route::get('/', 'MainController@ViewPage');

Route::get('/wavhzchange', 'MainController@ViewConvert');

Route::get('/brstmtowav', 'MainController@ViewBrstm');



Route::get('/details/nus3audio/{id}', 'MainController@NUS3AUDIODetails');

Route::get('/details/lopus/{id}', 'MainController@LopusDetails');

Route::get('/details/idsp/{id}', 'MainController@IDSPDetails');

Route::get('/details/wavhzchange/{id}', 'MainController@CompatibleDetails');

Route::get('/details/brstm/{id}', 'MainController@BrstmDetails');

Route::get('/details/brstmtonus3uadio/{id}', 'MainController@BrstmToNus3audioDetails');


Route::post('/create', [
    'uses' => 'MainController@FindType'
]);

Route::post('/wavhzchange/change', [
    'uses' => 'MainController@ConvertMusic'
]);

Route::post('/brstmtowav/change', [
    'uses' => 'MainController@ConvertBRSTM'
]);
