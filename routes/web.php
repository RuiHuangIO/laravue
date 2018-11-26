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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/test1', function () {
	return view('pages.test1');
})->name('test-1');

Route::get('/test2', function () {
	return view('pages.test2');
});

Route::get('/test3', function () {
	return view('pages.test3');
});


