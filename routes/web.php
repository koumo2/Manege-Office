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

Route::group(['prefix' => 'member'], function() {
    Route::get('home/home', 'Member\HomeController@add'); //ホーム画面へのアクセス
    Route::get('article/home', 'Member\HomeController@article_home'); //回覧板ホーム画面へのアクセス
    Route::get('article/create', 'Member\HomeController@article_create'); //回覧板作成画面へのアクセス
    Route::get('article/content', 'Member\HomeController@article_content'); //回覧板内容確認画面へのアクセス
    Route::get('schedule/home', 'Member\HomeController@schedule_home'); //スケジュールホーム画面へのアクセス
    Route::get('schedule/create', 'Member\HomeController@schedule_create'); //スケジュール作成画面へのアクセス
    Route::get('schedule/content', 'Member\HomeController@schedule_content'); //スケジュール内容確認画面へのアクセス
    Route::get('request/home', 'Member\HomeController@request_home'); //書類申請ホーム画面へのアクセス
    Route::get('request/create', 'Member\HomeController@request_create'); //書類申請作成画面へのアクセス
    Route::get('request/content', 'Member\HomeController@request_content'); //書類申請内容確認画面へのアクセス
});
