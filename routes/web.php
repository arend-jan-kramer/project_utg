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

Route::post("/profile", "userController@edit");
Route::get("/profile/user", "userController@profile");
Route::get("/profile/status", "userController@status");
Route::get("/profile/mail", "userController@mail");

// Ajax calls
Route::get("/mail/{id}", "callsController@getMessageId");
Route::get("/getproject", "callsController@getProjects");
Route::get("/count", "callsController@countMessages");

// GET
Route::get("/", "homeController@index");
Route::get("/project", "projectController@index");
Route::get("/project/me", "projectController@me");
Route::get("/project/new", "projectController@new");
Route::get("/project/history", "projectController@history");

// POST
Route::post("/project/new", "projectController@create");
Route::post("/project/to-me", "projectController@update");
Route::post("/project/{nr}/cancel", "projectController@cancel");
Route::post("/project/{nr}/finish", "projectController@finish");

Auth::routes();