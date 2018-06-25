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

Route::get('/', 'PostsController@index');    // Reading and outputing Data
Route::get('/create', 'PostsController@create');  // Creating Data
Route::post('/posts', 'PostsController@store');  // Creating Data
Route::delete('/posts/{id}', 'PostsController@destroy');  // Creating Data
Route::get('/posts/edit/{post}', 'PostsController@edit');  // Creating Data
Route::patch('/posts/edit/{post}', 'PostsController@update');  // Editing Data
