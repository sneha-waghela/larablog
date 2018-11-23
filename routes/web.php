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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();

Route::get('/register', 'UserController@register');
Route::post('/postRegister', 'UserController@postRegister');
Route::get('/login', 'UserController@login');
Route::post('/postLogin', 'UserController@postLogin');
Route::get('/logout', 'UserController@logout');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/posts', 'PostsController');