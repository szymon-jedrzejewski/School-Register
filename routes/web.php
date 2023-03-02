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
Route::get("/grades/add", 'App\Http\Controllers\GradeController@add');
Route::post("/grades", 'App\Http\Controllers\GradeController@save');
