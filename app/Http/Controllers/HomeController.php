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
use App\Specialty;
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
      $professions1 = Profession::all()->take(5);
      $professions2 = Profession::all()->where('id', '>', 5)->take(5);
      $professions3 = Profession::all()->where('id', '>', 13)->take(5);
      return view('pages.home', [
        'posts' => $posts,
        'professions1' => $professions1,
        'professions2' => $professions2,
        'professions3' => $professions3
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

    public function specialties()
    {
      $specialties = Specialty::all();
      return view('pages.specialties', ['specialties'=>$specialties]);
    }

    public function profileQuiz()
    {
      return view('profile.quiz');
    }
    

}
