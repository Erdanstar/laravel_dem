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
<<<<<<< HEAD
  Route::resource('/posts', 'PostsController');
=======
>>>>>>> c2c9a91b3a3317a47e06e331f87b67290526d32e
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
