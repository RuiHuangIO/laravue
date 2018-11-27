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

Route::get('/', 'FrontendController@page')->name('page');
Route::get('/about', 'FrontendController@page')->name('about');
Route::get('/blog', 'FrontendController@page')->name('blog');
Route::get('/contact', 'FrontendController@page')->name('contact');


