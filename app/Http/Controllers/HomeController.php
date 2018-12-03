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

    public function test()
    {
      $quizzes = Quiz::all();
      return view('quiz.index', ['quizzes'=>$quizzes]);
    }

    public function result()
    {
      if(!Session::has('results')) {
        return view('quiz.result');
      }


      $oldResult = Session::get('results');
      $result = new SessionResult($oldResult);
      $orentations = Orentation::where('quiz_id', '=', $result->results['1']['quiz_id'])->get();
      $questions = QuizQuestion::where('quiz_id', '=', $result->results['1']['quiz_id'])->get();
      foreach ($orentations as $orn) {
        $c = 1;
        $correctOptions = QuizCorrectOption::where('orentation_id', '=', $orn->id)->get();
        $questions = QuizQuestion::where('quiz_id', '=', $result->results['1']['quiz_id'])->get();
        foreach ($result->results as $res) {
          foreach ($correctOptions as $cop) {
            if($cop->orentation->id == $orn->id && $cop->question->id == $res['question_id']){
                if($cop->correct == $res['correct']){
                  $ores[$orn->id] = [
                    'count' => $c++,
                    'oren_id' => $orn->id
                  ];
                } else {
                  $ores[$orn->id] = [
                    'count' => $c-1,
                    'oren_id' => $orn->id
                  ];
                }
            }
          }
        }
      }
      foreach ($ores as $ore) {
        $d = ($ore['count']/$questions->count())*100;
        $os = Orentation::where('id', '=', $ore['oren_id'])->get();
        foreach ($os as $o) {
          $counts[$ore['oren_id']] = [
            'p' => round($d),
            'n' => $o->title
          ];
        }
      }
      return view('quiz.result', ['results' => $counts]);
    }

    public function profile()
    {
      $user = Auth::user();
      return view('auth.profile', ['user'	=>	$user]);
    }


    public function showTest($slug, $question_id)
    {
      $topic = Quiz::where('slug', '=', $slug)->first();
      // may needs to be refactored, may check sql queries
      $question = QuizQuestion::getByTopicAndQuestionNumber($slug, $question_id);
      $next = QuizQuestion::nextQuestionLink($slug, $question_id);
      $question->options = QuizQuestionOption::where('question_id', $question->id)->inRandomOrder()->get();
      $options = $question->options;
      return view('quiz.show')->with([
          'questionNumber' => $question_id,
          'quiz'           => $topic,
          'question'       => $question,
          'options'        => $options,
          'next'           => $next
      ]);

    }

    public function postQuestion(Request $request)
    {
      $oldResult = $request->session()->has('results') ? $request->session()->get('results') : null;
      $correct = (int)$request['correct'];
      $quiz_id = (int)$request['quiz_id'];
      $question_id = (int)$request['question_id'];
      $result = [
        'correct' => $correct,
        'quiz_id' => $quiz_id,
        'question_id' => $question_id
      ];
      $sessionResult = new SessionResult($oldResult);
      $sessionResult->add($result, $request['question_id']);

      $request->session()->put('results', $sessionResult);
      $questions = QuizQuestion::where('quiz_id', '=', $request['quiz_id'])->get();
      return redirect($request['nextUrl']);
    }

}
