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

// Projectページ
// Route::resource('project', 'ProjectController')->name('project')->middleware('verified');
Route::resource('project', 'ProjectController')->middleware('verified');

// Productページ
// Route::resource('product', 'ProductController')->name('product')->middleware('verified');
Route::resource('product', 'ProductController')->middleware('verified');

// Brandページ
// Route::resource('brand', 'BrandController')->name('brand')->middleware('verified');
Route::resource('brand', 'BrandController')->middleware('verified');

