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
});

/**
 * health
 */
Route::any('getHealthInfo','Health\InfoController@getHealthInfo');
Route::any('getWalkInfo','Health\WalkController@getWalkInfo');
Route::any('getBodyInfo','Health\BodyController@getBodyInfo');
Route::any('getSleepInfo','Health\SleepController@getSleepInfo');

/**
 * activity
 */
Route::any('activities','Activity\ActivitiesController@activities');
Route::any('myActivity','Activity\MyActivityController@myActivity');
Route::any('publishActivity','Activity\PublishController@publishActivity');

/**
 * friends
 */
Route::any('comments','Friends\CommentsController@comments');
Route::any('fans','Friends\FansController@fans');
Route::any('followedFriends','Friends\FollowedController@followedFriends');

/**
 * goal
 */
Route::any('createGoal','Goal\CreateController@createGoal');
Route::any('historyGoal','Goal\HistoryController@historyGoal');
Route::any('todo','Goal\TodoController@todo');

/**
 * user
 */
Route::get('profile','User\ProfileController@profile');
Route::get('loginPage','User\loginController@loginPage');
Route::get('login/{userName}/{password}','User\LoginController@login');
Route::get('register/{userName}/{password}','User\LoginController@register');
