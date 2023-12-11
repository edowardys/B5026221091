<?php

use Illuminate\Support\Facades\Route;

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

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan1', function () {
    return view('intohtml');
});

Route::get('pertemuan2', function () {
    return view('link');
});

Route::get('pertemuan3', function () {
    return view('style');
});

Route::get('pertemuan4', function () {
    return view('responsive');
});

Route::get('pertemuan5', function () {
    return view('js1');
});

Route::get('pertemuan6', function () {
    return view('js2');
});

Route::get('pertemuan7', function () {
    return view('validasi');
});


Route::get('Tugas2', function () {
    return view('latihanlayout');
});

Route::get('UTS', function () {
    return view('uts');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD Nilai
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@indexnilai');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiController@storenilai');

//route CRUD Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::post('/keranjangbelanja/update','App\Http\Controllers\KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

//route CRUD Kabel
Route::get('/kabel','App\Http\Controllers\kabelcontroller@indexkabel');
Route::get('/kabel/tambahkabel','App\Http\Controllers\kabelcontroller@tambahkabel');
Route::post('/kabel/storekabel','App\Http\Controllers\kabelcontroller@storekabel');
Route::get('/kabel/editkabel/{kodekabel}','App\Http\Controllers\kabelcontroller@editkabel');
Route::post('/kabel/updatekabel','App\Http\Controllers\kabelcontroller@update');
Route::get('/kabel/hapuskabel/{kodekabel}','App\Http\Controllers\kabelcontroller@hapuskabel');
Route::get('/kabel/viewkabel/{kodekabel}','App\Http\Controllers\kabelcontroller@viewkabel');

Route::get('/chat','App\Http\Controllers\chatcontroller@homechat');
Route::get('/chat/ChatMessage','App\Http\Controllers\chatcontroller@indexchat');
