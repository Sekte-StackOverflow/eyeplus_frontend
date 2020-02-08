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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function(){
// 	return dd(Auth::user());
// })->name('home');

Route::get('/', 'NavbarController@live');
Route::get('/live', 'NavbarController@live')->name('live');
Route::get('/shopping', 'NavbarController@shopping');
Route::get('/sosmed', 'NavbarController@sosmed');
Route::get('/info', 'NavbarController@info')->name('info');
Route::get('/shopping/{id}', 'NavbarController@barang');
Route::get('/live/{id}','NavbarController@streaming');


Route::get('/login', 'ValidasiController@login')->name('login');
Route::get('/register', 'ValidasiController@register')->name('register');
Route::get('/forgotpassword', 'ValidasiController@forgotpassword');

Route::post('/login','ValidasiController@postlogin');
Route::post('/register','ValidasiController@postregister');

Route::get('/logout', 'ValidasiController@logout')->name('logout');


// Auth::routes();
 
//verifikasi email user
// Auth::routes(['verify' => true]);
