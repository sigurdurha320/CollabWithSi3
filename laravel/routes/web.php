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

Auth::routes();

Route::get('/home', 'ArticleController@index')->name('home');

Route::get('/postform', 'ArticleController@postform')->name('postform');
Route::get('article', 'ArticleController@index');
Route::post('article', 'ArticleController@store');
Route::put('article', 'ArticleController@update');
Route::delete('article', 'ArticleController@destroy');
Route::get('/article/{article}', 'ArticleController@show')->name('article');

Route::post('comment/{article}', 'CommentController@store');
Route::get('/img/{id}', 'ImageController@store')->name('image');