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

Route::get('/', 'HomeController@index');
Route::get('/tentang', 'TentangController@index');
Route::get('/berita', 'BeritaController@index');
Route::get('/galeri', 'GaleriController@index');
Route::get('/kontak', 'KontakController@index');

Route::get('/admin/login', 'AdminController@showLogin');
Route::get('/admin/home', 'AdminController@showHome');
Route::get('/admin/tentang', 'AdminController@showTentang');
Route::get('/admin/berita', 'AdminController@showBerita');
Route::get('/admin/galeri', 'AdminController@showGaleri');
Route::get('/admin/kontak', 'AdminController@showKontak');
