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

Route::get('/', 'AuthController@login');
Route::get('login', 'AuthController@login');
Route::post('login', 'AuthController@check');
Route::get('logout', 'AuthController@logout');
Route::get('generate', 'AuthController@generate');
Route::post('generate', 'AuthController@store');
Route::get('refresh', 'AuthController@refresh');

Route::get('welcome', 'BartefController@welcome');
Route::get('store', 'BartefController@store');
Route::get('home', 'BartefController@home');
Route::get('show/{id}', 'BartefController@show');
Route::get('barter/{id}', 'BartefController@barter');
Route::get('interests/{id}', 'BartefController@interests');
Route::get('exchange/{id}', 'BartefController@exchange');
Route::get('reset', 'BartefController@reset');
