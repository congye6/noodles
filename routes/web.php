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

Route::get('/','Health\WalkController@getWalkInfo')->middleware('login');

/**
 * health
 */

Route::get('getStepInMinute/{date}','Health\WalkController@getStepInMinute')->middleware('login');
Route::get('getStepRate/{date}','Health\WalkController@getStepRate')->middleware('login');
Route::get('stepHistory','Health\WalkController@stepHistory')->middleware('login');
Route::get('getWalkInfo','Health\WalkController@getWalkInfo')->middleware('login');
Route::any('walkGoal/{goal}','Health\WalkController@setWalkGoal')->middleware('login');

Route::get('getBodyInfo','Health\BodyController@getBodyInfo')->middleware('login');
Route::any('bodyInfo/{weight}/{height}/{goal}','Health\BodyController@setBodyInfo')->middleware('login');
Route::get('bodyLineChartData','Health\BodyController@lineChartData')->middleware('login');
Route::get('getSleepInfo','Health\SleepController@getSleepInfo')->middleware('login');
Route::get('deepSleepRate','Health\SleepController@deepSleepRate')->middleware('login');
Route::get('lineChartData','Health\SleepController@lineChartData')->middleware('login');
/**
 * activity
 */
Route::get('activities','Activity\ActivitiesController@activities')->middleware('login');
Route::get('myActivity','Activity\MyActivityController@myActivity')->middleware('login');
Route::get('publishActivity','Activity\PublishController@publishActivity')->middleware('login');
Route::get('activityDetail/{activityId}','Activity\ActivitiesController@activity')->middleware('login');
Route::get('joinActivity/{activityId}','Activity\ActivitiesController@joinActivity')->middleware('login');
Route::any('publish/{description}/{startTime}/{endTime}/{sportType}/{enterFee}','Activity\PublishController@publish')->middleware('login');


/**
 * friends
 */
Route::any('comments','Friends\CommentsController@comments')->middleware('login');
Route::any('fans','Friends\FansController@fans')->middleware('login');
Route::get('followedFriends','Friends\FollowedController@followedFriends')->middleware('login');
Route::get('cancelFollowed/{followed}','Friends\FollowedController@cancelFollowed')->middleware('login');

/**
 * goal
 */
Route::any('createGoal','Goal\CreateController@createGoal')->middleware('login');
Route::any('historyGoal','Goal\HistoryController@historyGoal')->middleware('login');
Route::any('todo','Goal\TodoController@todo')->middleware('login');

/**
 * user
 */
Route::get('profile/{userName}','User\ProfileController@profile')->middleware('login');
Route::get('/myProfile','User\ProfileController@myProfile')->middleware('login');
Route::get('loginPage','User\loginController@loginPage');
Route::get('login/{userName}/{password}','User\LoginController@login');
Route::get('register/{userName}/{password}','User\LoginController@register');
