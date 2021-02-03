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


Route::get('/', 'ControllerSite@PageIndex');


// Route::get('/login', 'ControllerSite@PageLogin');
// Route::post('/login-dados', 'ControllerSite@PageLogin');
// Route::post('/login', 'UserController@create');
// Route::post('/login', 'UserController@store');

Route::resource('/login', 'UserController');