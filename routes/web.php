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

Route::resource("/bimbingan", "BimbinganController");
Auth::routes();

Route::post('/bimbingan', 'HomeController@index')->middleware('cekstatus');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', function () {
    return view('/bimbingan/create');
});
Route::post('/bimbingan', 'BimbinganController@store')->name('bimbingan.store');