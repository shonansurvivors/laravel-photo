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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PhotoController@index')->name('photos.index');
Route::resource('/photos', 'PhotoController');
Route::prefix('photos')->name('photos.bookmark')->middleware('auth')->group(function () {
    Route::put('{photo}/bookmark', 'PhotoController@bookmark');
    Route::delete('{photo}/bookmark', 'PhotoController@unbookmark');
});
