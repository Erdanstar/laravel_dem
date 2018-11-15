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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'auth'], function()
{
  Route::get('/', 'DashboardController@dashboard')->name('admin.index');
  Route::resource('/posts', 'PostsController');
  Route::resource('/tests', 'TestController');
  Route::resource('/answers', 'AnswerController');
  Route::resource('/orentation', 'OrentationController');
  Route::resource('/next', 'NextController');
});

Route::get('/', 'HomeController@index');
Route::get('/tests/{answer_number}', 'HomeController@tests');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
