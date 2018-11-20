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
  Route::resource('/quiz', 'QuizController');
  Route::resource('/status', 'StatusController');
  Route::resource('/questions', 'QuizQuestionController');
  Route::resource('/options', 'QuizOptionsController');
  Route::get('/questions/get/{id}', 'QuizQuestionController@getOptions');
  Route::resource('/corrects', 'QuizCorrectOptionController');
  Route::resource('/orentations', 'OrentationController');
});

Route::get('/', 'HomeController@index');
Route::get('/quiz', 'HomeController@test')->name('quiz');
Route::get('/quiz/{slug}/{question_id}', 'HomeController@showTest');
Route::post('/uquestions', 'HomeController@storeQuestions');
Route::get('/profile', 'HomeController@profile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
