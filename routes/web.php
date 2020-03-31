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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', 'Index\IndexController@index');
Route::get('/login', 'Index\IndexController@login');
Route::get('/zc', 'Index\IndexController@zc');
Route::post('/zcdo', 'Index\IndexController@zcdo');
Route::post('/logindo', 'Index\IndexController@logindo');
Route::get('/tc', 'Index\IndexController@tc');


