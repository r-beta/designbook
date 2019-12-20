<?php

// 認証関連
Auth::routes(['verify' => true]);

// ホーム画面
Route::get('/', 'HomeController@index')->name('home');

// Projectページ
Route::resource('projects', 'ProjectController')->middleware('verified');

// Productページ
Route::resource('products', 'ProductController')->middleware('verified');

// Brandページ
Route::post('brands/confirm', 'BrandController@confirm')->name('brands.confirm')->middleware('verified');
Route::resource('brands', 'BrandController')->middleware('verified');
