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
    return view('welcome');
});

//admin.home.createのアクセスが来たら、HomeControllerのadd関数に渡す
Route::group(['prefix' => 'member'], function() {
    Route::get('home/home', 'Member\HomeController@add');
    Route::get('article/home', 'Member\HomeController@article');
    Route::get('request/home', 'Member\HomeController@request');
});
