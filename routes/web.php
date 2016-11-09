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

Route::get('/siswa/beranda', function () {
    return view('siswa/beranda');
});

Route::get('/siswa/elearning', function () {
    return view('siswa/elearning');
});

Route::get('/siswa/elearningSoal', function () {
    return view('siswa/elearningSoal');
});

Route::get('/siswa/nilai', function() {
	return view('siswa/nilai');
});

Route::get('/siswa/pembayaran', function() {
	return view('siswa/pembayaran');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/siswa/elearning', 'ElearningController@read');