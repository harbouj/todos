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
Route::view('/', 'welcome');

Route::get("/todos", "TodoController@index");
Route::post("/todos", "TodoController@store");

Route::patch("/todos/{todo}", "TodoController@update");
Route::delete("/todos/{todo}", "TodoController@destroy");