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

Route::view('login', 'auth.login')->name('login.index');
Route::post('login', 'Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::view('register', 'auth.register')->name('register.index');
Route::post('register', 'Auth\RegisterController@register')->name('register');
