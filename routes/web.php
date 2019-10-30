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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
});

Route::get('/postpage1', function () {
    return view('postpage1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

