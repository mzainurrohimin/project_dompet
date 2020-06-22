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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/', 'FrontEndController@index')->name('frontend');

Route::resource('logo', 'LogoController');
Route::resource('eksklusif', 'EksklusifController');
Route::resource('warnadompet', 'WarnaDompetController');
Route::resource('keunggulan', 'KeunggulanController');
Route::resource('emboss', 'EmbossController');
Route::resource('promo', 'PromoController');
Route::resource('harga', 'HargaController');
Route::resource('testimoni', 'TestimoniController');
