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

// 認証関連
Auth::routes(['verify' => true]);

// ホーム画面
Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

// Brandページ
Route::resource('brand', 'BrandController');

