<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('blog',BlogController::class);


// blog
Route::get('blogs','BlogController@index')->name('blogs');
Route::get('blogs/create','BlogController@create')->name('tambahblogs');
Route::post('blogs/create','BlogController@store')->name('simpanblogs');

Route::get('blogs/{id}/edit','BlogController@edit');
Route::post('blogs/{id}/update','BlogController@update');
Route::get('blogs/{id}/delete','BlogController@delete');