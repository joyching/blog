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

Route::get('/', 'HomeController@index')->name('home');
Route::view('about', 'about')->name('about');

Route::get('posts', 'PostController@index')->name('post.index');
Route::get('posts/{post}', 'PostController@show')->name('post.show');
Route::post('posts/{post}/comments', 'API\CommentController@store')->name('comment.store');
