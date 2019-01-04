<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\QuizCorrectOption;
use App\Profession;
use App\Quiz;
use App\Post;
use App\Country;
use App\QuizQuestion;
use App\QuizResult;
use App\Orentation;
use App\QuizQuestionOption;
use App\SessionResult;
use Session;

class HomeController extends Controller
{

    public $cOptions = null;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest()->paginate(5);
      $professions = Profession::orderByRaw('RAND(5)')->take(5)->get();
      return view('pages.home', [
        'posts' => $posts,
        'professions' => $professions
      ]);
    }

    public function profile()
    {
      $user = Auth::user();
      return view('auth.profile', ['user'	=>	$user]);
    }

    public function test()
    {
      $quizzes = Quiz::all();
      return view('quiz.index', ['quizzes'=>$quizzes]);
    }
    

}
