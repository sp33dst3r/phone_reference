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

Route::get('/', "ReferenceController@index");
Route::get('/add', "ReferenceController@add");
Route::post('/save', "ReferenceController@save");
Route::get('/get_data', "ReferenceController@get_data");
