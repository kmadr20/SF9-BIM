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

Route::get('/', 'PagesController@home');
Route::get('/home', 'HomeController@index')->name('home');

// Client actions
Route::get('/createclient', 'PagesController@createclient');
Route::get('/clients', 'ClientsController@index');
Route::get('/clients/{id?}', 'ClientsController@show');
Route::post('/createclient', 'ClientsController@store');

Auth::routes();
