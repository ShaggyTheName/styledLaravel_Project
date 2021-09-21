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

Route::get('/home', 'PostController@showAll');

Route::post('/create', 'PostController@create');

Route::delete('/home/{id}', 'PostController@delete');

Route::get('/posts', 'PostController@showAll'); 

Route::get('/formular', 'PostController@show');

Route::get('/home/{id}', 'PostController@view');
