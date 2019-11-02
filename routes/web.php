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

Route::get('/bmi', 'BmiController@index');
Route::post('/bmi', 'BmiController@calculate');

Route::get('/constellation', 'constellationController@index');
Route::post('/constellation', 'constellationController@calculate');

/// tes用
Route::get('/a', 'AController@index');
Route::post('/a', 'AController@calculate');

// 掲示板機能
Route::get('/post', 'PostController@index');
Route::post('/post/create', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/edit/{id}', 'PostController@update');
Route::get('/post/detail/{id}', 'PostController@detail');

Route::post('/comment/create', 'CommentController@store');
Route::get('/comment/edit/{id}', 'CommentController@edit');
Route::post('/comment/edit/{id}', 'CommentController@update');



// Laravelのログイン機能や、ホーム画面
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');