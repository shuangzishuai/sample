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

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
Route::get('/', 'StaticPagesController@home');
Route::get('/help', 'StaticPagesController@help');
=======

Route::get('/', 'StaticPagesController@home');
Route::get('help', 'StaticPagesController@help');
>>>>>>> static-pages
Route::get('/about', 'StaticPagesController@about');
