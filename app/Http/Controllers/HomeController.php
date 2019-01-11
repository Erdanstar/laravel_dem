<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\QuizCorrectOption;
use App\Profession;
use App\ProfessionCategory;
use App\Quiz;
use App\Post;
use App\Country;
use App\QuizQuestion;
use App\QuizResult;
use App\Orentation;
use App\QuizQuestionOption;
use App\SessionResult;
use App\Specialty;
use App\University;
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

    public function professions()
    {
      $profession_categories = ProfessionCategory::all();
      return view('pages.professions', ['profession_categories'=>$profession_categories]);
    }

    public function educations()
    {
      if(Input::has('type')){
        $type = Input::get('type');
        if(Input::has('country')){
          $country = Input::get('country');
          $universities = University::where('t_c', $type)->where('country_id', $country)->get();
          $ctry = Country::where('id', $country)->first();
        } else {
          $universities = University::where('t_c', $type)->get();
          $ctry = null;
        }
      } else {
        if(Input::has('country')){
          $country = Input::get('country');
          $universities = University::where('country_id', $country)->get();
          $ctry = Country::where('id', $country)->first();
        } else {
          $universities = University::all();
          $ctry = null;
        }
        $type = null;
      }
      $countries = Country::all();
      return view('pages.educations', [
        'universities'=>$universities,
        'countries' => $countries,
        'type' => $type,
        'ctry' => $ctry
      ]);
    }

    public function profileQuiz()
    {
      return view('profile.quiz');
    }
    

}
