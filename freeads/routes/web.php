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
Route::get('/', 'IndexController@showIndex');
Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/user','UserController@index')->name('user');
Route::get('/annonce', 'AnnonceController@index')->name('annonce');
Route::get('/viewAnnonce', 'AnnonceController@show')->name('viewAnnonce');


Route::post('/annonce', 'AnnonceController@store')->name('annonce');
Route::post('/user/edit','UserController@edit')->name('edit');
Route::post('/user/update','UserController@update')->name('update');
Route::post('/user/destroy','UserController@destroy')->name('destroy');