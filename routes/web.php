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

Route::get('/', 'HomeController@displayHome');


Route::get('/register', function () {
    return view('form');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/welcome', 'AuthController@form');
