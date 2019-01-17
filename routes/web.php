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
Route::get('/', function(){
    return redirect('/kz');
});
Route::get('/profile', function(){
		return redirect('/'.app()->getLocale().'/profile');
});

Route::group(['prefix' => '{local}'], function ($local) {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/quiz', 'HomeController@test')->name('quiz');
    Route::get('/professions', 'HomeController@professions')->name('professions');
    Route::get('/educations', 'HomeController@educations');
    Route::get('/educations/institution/{id}', 'HomeController@educationsProfile');

    Route::get('/indev', function ($local){
				app()->setLocale($local);
        return view('pages.indev');
    });

    Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>'admin'], function()
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



    Route::group(['middleware'	=>	'auth'], function(){
        Route::get('/profile', 'HomeController@profile')->name('profile');
        Route::get('/quiz/{slug}/{question_id}', 'QuizController@showTest');
        Route::post('/quiz/post', 'QuizController@postQuestion')->name('post.quiz');
        Route::get('/quiz/result', 'QuizController@showProfessions')->name('result.quiz.show');
        Route::post('/quiz/result/post', 'QuizController@postResult')->name('result.quiz.post');
        Route::get('/profile/quiz', 'HomeController@profileQuiz')->name('profile.quiz');
    });

    Auth::routes();
});