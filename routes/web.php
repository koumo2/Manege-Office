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

Route::group(['prefix' => 'member','middleware' => 'auth'], function() {

    /*メイン*/
    //ホーム画面を表示
    Route::get('home/main', 'Member\HomeController@add');
     //ログアウト
    Route::get('home/logout', 'Member\HomeController@logout');

    /*回覧板*/
    //ホーム画面を表示
    Route::get('article/home', 'Member\HomeController@article_home')->name('article_home');
    //新規作成画面を表示
    Route::get('article/create', 'Member\HomeController@article_create')->name('article_create');
    //登録
    Route::post('article/store', 'Member\HomeController@article_store')->name('article_store');
    //詳細確認画面を表示
    Route::get('article/content/{id}', 'Member\HomeController@article_content')->name('article_content');
    //編集画面を表示
    Route::get('article/edit/{id}', 'Member\HomeController@article_edit')->name('article_edit');
    //更新
    Route::post('article/update', 'Member\HomeController@article_update')->name('article_update');
    //削除
    Route::post('article/delete/{id}', 'Member\HomeController@article_delete')->name('article_delete');

    /*仮作成*/
    Route::get('schedule/home', 'Member\HomeController@schedule_home');
    Route::get('schedule/create', 'Member\HomeController@schedule_create');
    Route::get('schedule/content', 'Member\HomeController@schedule_content');
    Route::get('request/home', 'Member\HomeController@request_home');
    Route::get('request/create', 'Member\HomeController@request_create');
    Route::get('request/content', 'Member\HomeController@request_content');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
