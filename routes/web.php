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
// Route::post('/live', 'NavbarController@livepost');
Route::get('/shopping', 'NavbarController@shopping')->name('shopping');
Route::get('/sosmed', 'NavbarController@sosmed');

Route::get('/info', 'NavbarController@info')->name('info');
Route::post('/info', 'NavbarController@info_upload');

Route::get('/shopping/{id}', 'NavbarController@barang');
Route::post('/shopping/{id}', 'NavbarController@barangpost');
Route::get('/live/{id}','NavbarController@streaming')->name('streaming');
Route::post('/live/{id}','NavbarController@streamingpost')->name('streamingid');
Route::get('/subscribe/{id}','NavbarController@subscribe')->name('subscribe')->middleware('verified');
Route::post('/subscribe/{id}','NavbarController@subscribepost')->middleware('verified');


Route::get('/logintelp', 'ValidasiController@login')->name('logintelp');
Route::get('/registertelp', 'ValidasiController@register')->name('registertelp');
Route::get('/registertelp/{id}/{News}', 'ValidasiController@register_id');
Route::get('/registertelp//{News}', 'ValidasiController@register_null');
Route::get('/registeremail/{id}/{News}', 'ValidasiController@registeremail_id');
Route::get('/registeremail', 'ValidasiController@registeremail');

Route::get('/forgotpassword', 'ValidasiController@forgotpassword');

Route::post('/logintelp','ValidasiController@postlogin')->name('password.request');
Route::post('/registertelp','ValidasiController@postregister');

Route::get('/logout', 'ValidasiController@logout')->name('logout');


Route::get('/sendemail', 'HomeController@formemail')->name('formemail');
Route::post('/send-email', 'HomeController@sendEmail')->name('email');


Route::get('/forgotpassword/{id}', 'ValidasiController@test');


Route::get('/token/{email}', 'ValidasiController@token')->name('token');

// Auth::routes();
 
//verifikasi email user
Auth::routes(['verify' => true]);


// Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/modal', 'NavbarController@modal');
