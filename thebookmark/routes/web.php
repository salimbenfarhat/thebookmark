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
Auth::routes();

Route::get('/', 'FrontController@index')->name('index');
Route::get('/aboutus', 'FrontController@aboutus')->name('aboutus');
Route::get('/bookmarks', 'FrontController@bookmarks')->name('bookmarks');
Route::get('/offers', 'FrontController@offers')->name('offers');
Route::get('/api', 'FrontController@api')->name('api');
Route::get('/contact', 'FrontController@contact')->name('contact');

Route::get('/home', 'BackController@index')->name('home');
Route::get('/settings', 'BackController@settings')->name('settings');