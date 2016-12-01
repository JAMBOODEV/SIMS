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
Route::get('/siswa/unduh', function () {
    return view('siswa/unduh');
});

Route::get('/siswa/soal', function () {
    return view('siswa/soal');
});
Route::get('/siswa/info', function () {
    return view('siswa/info');
});

Route::get('/siswa/pesan-terkirim', function () {
    return view('siswa/pesan_terkirim');
});

Route::get('/siswa/detile_pesan', function () {
    return view('siswa/info');
});

Route::get('/siswa/pesan-masuk', function () {
    return view('siswa/pesan_masuk');
});

Route::get('/siswa/berita', function () {
    return view('siswa/berita');
});

Route::get('/siswa/nilai', function() {
	return view('siswa/nilai');
});

Route::get('/siswa/pembayaran', function() {
	return view('siswa/pembayaran');
});

Route::get('/siswa/forum', function() {
	return view('siswa/forum');
});

Route::get('/guru/beranda', function() {
    return view('guru/beranda');
});

Route::get('/guru/elearning', function () {
    return view('guru/elearning');
});

Route::get('/guru/nilai', function () {
    return view('guru/nilai');
});

Route::get('/guru/input-soal', function () {
    return view('guru/input-soal');
});

Route::get('/guru/input-jawaban', function () {
    return view('guru/input-jawaban');
});

Route::get('/guru/nilai-elearning', function () {
    return view('guru/nilai-elearning');
});

Route::get('/guru/input-nilai', function () {
    return view('guru/input-nilai');
});

Route::get('/guru/lihat-nilai', function () {
    return view('guru/lihat-nilai');
});

Route::get('/guru/info', function () {
    return view('guru/info');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/siswa/elearning', 'ElearningController@read');
