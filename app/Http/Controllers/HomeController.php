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
use App\Language;
use Session;

class HomeController extends Controller
{

    public $cOptions = null;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($local)
    {
			app()->setLocale($local);
			$currentUrl = '/';
			$language = Language::where('code', $local)->first();
      $posts = Post::where('lang_id', $language->id)->latest()->paginate(5);
      $professions1 = Profession::all()->take(5);
      $professions2 = Profession::all()->where('id', '>', 5)->take(5);
      $professions3 = Profession::all()->where('id', '>', 13)->take(5);
      return view('pages.home', [
        'posts' => $posts,
        'professions1' => $professions1,
        'professions2' => $professions2,
        'professions3' => $professions3,
				'curl' => $currentUrl
      ]);
    }

    public function profile($local)
    {
			app()->setLocale($local);
			$curl = 'profile';
      $user = Auth::user();
      return view('auth.profile', ['user'	=>	$user, 'curl' => $curl]);
    }

    public function test($local)
    {
      app()->setLocale($local);
			$language = Language::where('code', $local)->first();
			$quizzes = Quiz::all()->where('lang_id', $language->id);
			$currentUrl = 'quiz';
      return view('quiz.index', ['quizzes'=>$quizzes, 'lg' => $language,'curl' => $currentUrl]);
    }

    public function professions($local)
    {
			app()->setLocale($local);
			$curl = 'professions';
      $profession_categories = ProfessionCategory::paginate(12);
      return view('pages.professions', ['profession_categories'=>$profession_categories, 'curl' => $curl]);
    }

    public function educations($local)
    {
			app()->setLocale($local);
			$curl = 'educations';
      if(Input::has('type')){
        $type = Input::get('type');
        if(Input::has('country')){
          $country = Input::get('country');
          $universities = University::where('t_c', $type)->where('country_id', $country)->paginate(12);
          $ctry = Country::where('id', $country)->first();
        } else {
          $universities = University::where('t_c', $type)->paginate(12);
          $ctry = null;
        }
      } else {
        if(Input::has('country')){
          $country = Input::get('country');
          $universities = University::where('country_id', $country)->paginate(12);
          $ctry = Country::where('id', $country)->first();
        } else {
          $universities = University::paginate(12);
          $ctry = null;
        }
        $type = null;
      }
      $countries = Country::all();
      return view('pages.educations', [
        'universities' => $universities,
        'countries' => $countries,
        'type' => $type,
				'ctry' => $ctry,
				'curl' => $curl
      ]);
    }

    public function educationsProfile($local, $id)
    {
			app()->setLocale($local);
			$curl = null;
      $university = University::where('id', $id)->get()->first();
      $countries = Country::all();
      return view('pages.university', ['university' => $university, 'countries' => $countries, 'curl' => $curl]);
    }

    public function profileQuiz($local)
    {
			app()->setLocale($local);
			$curl = 'profile/quiz';
      return view('profile.quiz', ['curl' => $curl]);
    }
    

}
