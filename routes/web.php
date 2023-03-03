<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/grades/list/{slug}", 'App\Http\Controllers\GradeController@index');
Route::get("/grades/list", 'App\Http\Controllers\GradeController@show');
Route::get("/grades/add", 'App\Http\Controllers\GradeController@add');
Route::post("/grades", 'App\Http\Controllers\GradeController@save');
Route::get("/grades/delete/{slug}", 'App\Http\Controllers\GradeController@delete');//it's done on purpose
Route::get("/grades/edit/{slug}", 'App\Http\Controllers\GradeController@details');
Route::put("/grades/update/{slug}", 'App\Http\Controllers\GradeController@update');

Route::get("/users/list", 'App\Http\Controllers\UserController@index');
Route::get("/users/edit/{slug}", 'App\Http\Controllers\UserController@show');
Route::put("/users/update/{slug}", 'App\Http\Controllers\UserController@update');
Route::get("/users/add", 'App\Http\Controllers\UserController@add');
Route::post("/users/save", 'App\Http\Controllers\UserController@save');
Route::get("/users/delete/{slug}", 'App\Http\Controllers\UserController@delete');//it's done on purpose
