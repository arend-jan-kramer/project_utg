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

Route::get('registration', 'userController@registration');
Route::get('project', 'projectController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('image-svg', function () {
    return view('svg');
});


Route::get('kleuren', function () {
    return view('kleuren');
});

Route::get('greensocks', function () {
    return view('greensocks');
});
