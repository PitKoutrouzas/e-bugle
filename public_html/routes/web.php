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

Route::get('/', 'BlogsController@index');


Route::get('contactus', 'ContactUsController@index');
Route::get('blogsboard', 'BlogsController@index');
Route::get('profile', 'ProfileController@index');
Route::post('blogsboard', 'BlogsController@index');
Route::post('blogsboardCreate', 'BlogsController@createBlog');
Route::post('blogsboardEdit/{id}', 'BlogsController@editBlog');
Route::get('blogsboardDelete/{id}', 'BlogsController@deleteBlog');
Route::get('blog/{id}', 'BlogsController@showBlog');

