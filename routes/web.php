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

Route::get('/', 'PostController@index')->name('welcome');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/dashboard/profile', 'HomeController@showProfile')->name('profile');
Route::post('/dashboard/profile', 'HomeController@updateProfile')->name('profile.edit');
Route::delete('/dashboard/profile', 'HomeController@deleteProfile')->name('profile.destroy');

Route::resource('posts', 'PostController');
Route::post('/posts/{post}/like', 'PostController@like')->name('posts.like');
