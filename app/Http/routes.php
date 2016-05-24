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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lesson', function () {
    return view('lesson');
});

//Route::get('/register', function() {
//    return view('register');
//});
//
//Route::get('/login', function() {
//    return view('login');
//});

Route::auth();

// Registration Routes...
$this->post('register', 'Auth\AuthController@register');
