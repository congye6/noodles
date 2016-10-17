<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 *  health
 */
Route::any('getHealthInfo','Health\InfoController@getHealthInfo');
Route::any('getWalkInfo','Health\WalkController@getWalkInfo');
Route::any('getBodyInfo','Health\BodyController@getBodyInfo');
Route::any('getSleepInfo','Health\SleepController@getSleepInfo');