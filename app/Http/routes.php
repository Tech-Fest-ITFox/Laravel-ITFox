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

Route::get('/', [
    'uses' => function () {
        return view('welcome');
    },
    'middleware' => 'guest'
]);

// Registration Routes...
Route::auth();
$this->post('register', 'Auth\AuthController@register');

$this->post('login', [
    'uses' => 'Auth\AuthController@login',
    'as' => 'login'
]);

Route::group(['middleware' => ['roles', 'auth']], function () {

    Route::get('home', [
        'uses' => 'HomeController@showHomePage',
        'as' => 'home',
        'roles' => ['Admin', 'Student', 'Teacher']
    ]);

    Route::get('lesson', function () {
        return view('lesson');
    });


});


Route::get('edit-user', function () {
    return view('edit-user');
});


//Admin
Route::group(['middleware' => ['roles', 'auth']], function () {

    Route::get('/secret/admin/dashboard', [
        'uses' => 'AdminController@showDashboard',
        'as' => 'admin.dashboard',
        'roles' => ['Admin']
    ]);

});