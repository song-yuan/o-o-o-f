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
Route::get('/', 'HomeController@index')->name("main");
Route::get('/captcha', 'HomeController@captcha');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', 'Auth\RegisterController@index');
    Route::post('/register/create', 'Auth\RegisterController@create');
    
    Route::get('/login', 'Auth\LoginController@index');
    Route::post('/', 'Auth\LoginController@login');
    Route::get('/logout', 'Auth\LoginController@logout');
});

Route::group(['prefix' => 'article'], function () {
    Route::get('/', 'ArticleController@index');
    Route::get('/{single}', 'ArticleController@single');
    Route::get('/view/{id}', 'ArticleController@view');
});

Route::group(['prefix' => 'order'], function () {
    Route::get('/', 'OrderController@index');
    Route::post('/search', 'OrderController@search');
});