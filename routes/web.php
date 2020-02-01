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

Route::get('/', 'NavbarController@live');
Route::get('/live', 'NavbarController@live');
Route::get('/shopping', 'NavbarController@shopping');
Route::get('/sosmed', 'NavbarController@sosmed');
Route::get('/info', 'NavbarController@info');
Route::get('/shopping/barang', 'NavbarController@barang');
Route::get('/live/streaming/{id}','NavbarController@streaming');

Route::get('test', 'NavbarController@test');
