<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('auth/github/authorise', 'AuthController@redirectToProvider');
Route::get('auth/github/callback', 'AuthController@handleProviderCallback');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/dashboard', 'DashboardController@index');

Route::get('/user/profile', 'UserController@profile');
Route::get('/user/repositories', 'UserController@repositories');


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' =>'api'], function() {

    Route::get('/repositories', 'UserController@repositories');
    Route::post('/hooks/{hook}', 'HooksController@process');

});