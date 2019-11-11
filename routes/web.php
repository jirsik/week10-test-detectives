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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/detective', 'DetectiveController@index');
Route::get('/detective/{slug}', 'DetectiveController@show');
Route::post('/detective/{id}', 'DetectiveController@hire');

Route::get('/detective/api/{slug}', 'DetectiveController@api');


Auth::routes();
