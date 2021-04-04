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

Route::get('/', 'BlogsController@feed');
Route::get('/laravel', 'BlogsController@feed');

Route::get('contactus', 'ContactUsController@index');
Route::get('blogsboard/{id}', 'BlogsController@index');
Route::post('blogsboard/{id}', 'BlogsController@index');
Route::get('profile/{id}', 'ProfileController@index');
Route::post('profileEdit', 'ProfileController@editProfile');
Route::get('login', 'LoginController@index');
Route::post('blogsboardCreate', 'BlogsController@createBlog');
Route::post('blogsboardEdit/{id}', 'BlogsController@editBlog');
Route::get('blogsboardDelete/{id}', 'BlogsController@deleteBlog');
Route::get('blog/{id}', 'BlogsController@showBlog');
Route::get('blogsfeed', 'BlogsController@feed');
Route::post('blogsfeed', 'BlogsController@feed');
Route::get('blogsfeed/{category}', 'BlogsController@feedWithCategory');
Route::post('blogsfeed/{category}', 'BlogsController@feedWithCategory');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
