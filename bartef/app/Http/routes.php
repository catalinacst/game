<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BartefController@index');
Route::get('welcome', 'BartefController@welcome');
Route::get('store', 'BartefController@store');
Route::get('home', 'BartefController@home');
Route::get('show/{id}', 'BartefController@show');
Route::get('barter/{id}', 'BartefController@barter');
Route::get('interests/{id}', 'BartefController@interests');
Route::get('exchange/{id}', 'BartefController@exchange');
Route::get('login', 'BartefController@login');
Route::post('check', 'BartefController@check');
