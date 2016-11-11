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
    return view('user/welcome');
})->middleware('login');

/**
 * health
 */
Route::any('getHealthInfo','Health\InfoController@getHealthInfo')->middleware('login');
Route::any('getWalkInfo','Health\WalkController@getWalkInfo')->middleware('login');
Route::any('getBodyInfo','Health\BodyController@getBodyInfo')->middleware('login');
Route::any('getSleepInfo','Health\SleepController@getSleepInfo')->middleware('login');

/**
 * activity
 */
Route::get('activities','Activity\ActivitiesController@activities')->middleware('login');
Route::get('myActivity','Activity\MyActivityController@myActivity')->middleware('login');
Route::get('publishActivity','Activity\PublishController@publishActivity')->middleware('login');
Route::get('activityDetail/{activityId}','Activity\ActivitiesController@activity')->middleware('login');
Route::get('joinActivity/{activityId}','Activity\ActivitiesController@activity')->middleware('login');
Route::any('publish/{description}/{startTime}/{endTime}/{sportType}/{enterFee}','Activity\PublishController@publish')->middleware('login');


/**
 * friends
 */
Route::any('comments','Friends\CommentsController@comments')->middleware('login');
Route::any('fans','Friends\FansController@fans')->middleware('login');
Route::any('followedFriends','Friends\FollowedController@followedFriends')->middleware('login');

/**
 * goal
 */
Route::any('createGoal','Goal\CreateController@createGoal')->middleware('login');
Route::any('historyGoal','Goal\HistoryController@historyGoal')->middleware('login');
Route::any('todo','Goal\TodoController@todo')->middleware('login');

/**
 * user
 */
Route::get('profile','User\ProfileController@profile')->middleware('login');
Route::get('loginPage','User\loginController@loginPage');
Route::get('login/{userName}/{password}','User\LoginController@login');
Route::get('register/{userName}/{password}','User\LoginController@register');
