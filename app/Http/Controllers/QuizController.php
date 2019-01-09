<?php

namespace App\Http\Controllers;

use App\Profession;
use Illuminate\Http\Request;
use App\Quiz;
use App\QuizQuestion;
use App\QuizResult;
use App\Orentation;
use App\QuizQuestionOption;
use App\QuizCorrectOption;
use App\SessionResult;
use Session;
use Auth;

class QuizController extends Controller
{
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

    public function showProfessions()
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
                $counts[] = [
                    'p' => round($d),
                    'n' => $o->title,
                    'id' => $o->id
                ];
            }
        }
        rsort($counts);

        $orentation = Orentation::where('id', '=', $counts[0]['id'])->first();
        $professions = Profession::where('orentation_id', '=', $orentation->id)->get();
        return view('quiz.choose-profession')->with([
            'orentation' => $orentation,
            'professions' => $professions
        ]);
    }

    public function postResult(Request $request)
    {
        QuizResult::create([
            'user_id' => Auth::user()->id,
            'orentation_id' => $request->orentation,
            'quiz_id' => $request->quiz,
            'profession_id' => $request->profession
        ]);
        Session::flush();
        Session::regenerate();
        return redirect()->route('quiz')->with('status', 'Added');
    }
}
