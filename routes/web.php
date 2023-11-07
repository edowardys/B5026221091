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
