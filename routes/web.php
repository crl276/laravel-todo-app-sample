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

// These functions come from the Illuminate\Foundation\Auth\AuthenticatesUsers package that's pulled into the LoginController method.
Route::get('auth/login', 'Auth\LoginController@showLoginForm');

Route::post('auth/login', 'Auth\LoginController@login');

Route::get('auth/logout', 'Auth\LoginController@logout');

//Registration routes

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');

Route::post('auth/register', 'Auth\RegisterController@register');