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

Route::get('project', 'projectController@index');
Route::get('project/me', 'projectController@me')->middleware('auth');
Route::get('project/new', 'projectController@new')->middleware('auth');
Route::post('project/new', 'projectController@newproject')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('kleuren', function () {
    return view('kleuren');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
