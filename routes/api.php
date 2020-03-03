<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/live', 'ApiController@streamingpost')->name('live');
Route::put('/live/{id}', 'NavbarController@streamingputAPI')->name('liveAPI');

// Route::get('/shopping/{id}', 'NavbarController@barang');
Route::put('/shopping/{id}', 'NavbarController@produkputAPI')->name('produkAPI');

Route::put('change-password', 'ChangePasswordController@changepasswordAPI')->name('change.passwordAPI');
// Route::get('/live/{id}','NavbarController@streaming')->name('streaming');
// Route::post('/live/{id}','NavbarController@streamingpost')->name('streamingid');

// Route::get('/subscribe/{id}','NavbarController@subscribe')->name('subscribe')->middleware('verified');
// Route::post('/subscribe/{id}','NavbarController@subscribepost')->middleware('verified');

