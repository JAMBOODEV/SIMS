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

Route::get('/siswa', function () {
    return view('siswa/index');
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

Route::get('/guru', function() {
    return view('guru/index');
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

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/indetitas', function () {
    return view('admin/indetitas');
});

Route::get('/admin/pengaturan', function () {
    return view('admin/pengaturan');
});

Route::get('/admin/pegawai', function () {
    return view('admin/pegawai');
});

Route::get('/admin/siswa', function () {
    return view('admin/siswa');
});

Route::get('/admin/kelas', function () {
    return view('admin/kelas');
});

Route::get('/admin/matapelajaran', function () {
    return view('admin/matapelajaran');
});

Route::get('/admin/jadwal', function () {
    return view('admin/jadwal');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/siswa/elearning', 'ElearningController@read');
