<?php

namespace App\Http\Controllers;

use App\Language;
use App\Orentation;
use App\Profession;
use App\Quiz;
use App\QuizCorrectOption;
use App\QuizQuestion;
use App\QuizQuestionOption;
use App\QuizResult;
use App\SessionResult;
use App\ResultProfession;
use Auth;
use Illuminate\Http\Request;
use Session;

class QuizController extends Controller
{
    public function showTest($local, $slug, $question_id)
    {
        $language = Language::where('code', $local)->first();
        $lgs = Language::all();
        $topic = Quiz::where('slug', '=', $slug)->where('lang_id', $language->id)->first();
        $question = QuizQuestion::getByTopicAndQuestionNumber($slug, $question_id, $language->id);
        $next = QuizQuestion::nextQuestionLink($slug, $question_id, $local, $language->id);
        $question->options = QuizQuestionOption::where('question_id', $question->id)->where('lang_id', $language->id)->inRandomOrder()->get();
        $options = $question->options;
        return view('quiz.show')->with([
            'questionNumber' => $question_id,
            'quiz' => $topic,
            'question' => $question,
            'options' => $options,
            'next' => $next,
            'lg' => $language,
            'lgs' => $lgs,
            'curl' => null,
        ]);

    }

    public function postQuestion($local, Request $request)
    {
        $language = Language::where('code', $local)->first();
        $oldResult = $request->session()->has('results') ? $request->session()->get('results') : null;
        $correct = (int) $request['correct'];
        $quiz_id = (int) $request['quiz_id'];
        $question_id = (int) $request['question_id'];
        $result = [
					'correct' => $correct,
					'quiz_id' => $quiz_id,
					'question_id' => $question_id,
					'lang_id' => $language->id
        ];
        $sessionResult = new SessionResult($oldResult);
        $sessionResult->add($result, $request['question_id']);

        $request->session()->put('results', $sessionResult);
        $questions = QuizQuestion::where('quiz_id', '=', $request['quiz_id'])->where('lang_id', $language->id)->get();
        return redirect($request['nextUrl']);
    }

    public function showProfessions($local)
    {
				app()->setLocale($local);
        if (!Session::has('results')) {
            return redirect('/' . $local . '/quiz');
        }
        $oldResult = Session::get('results');
				$result = new SessionResult($oldResult);
				$language = Language::where('code', $local)->first();
				$allQuestions = QuizQuestion::all()->where('lang_id', $language->id);
        $orentations = Orentation::all()->where('quiz_id', '=', $result->results[0]['quiz_id'])->where('lang_id', $language->id);
        $questions = QuizQuestion::all()->where('quiz_id', '=', $result->results[0]['quiz_id'])->where('lang_id', $language->id);
        foreach ($orentations as $orn) {
            $c = 1;
						$correctOptions = QuizCorrectOption::all()->where('orentation_id', '=', $orn->id)->where('lang_id', $language->id);
            foreach ($result->results as $res) {
                foreach ($correctOptions as $cop) {
                    if ($cop->orentation->id == $orn->id && $cop->question->id == $res['question_id']) {
                        if ($cop->correct == $res['correct']) {
                            $ores[$orn->id] = [
                                'count' => $c++,
                                'oren_id' => $orn->id,
                            ];
                        } else {
                            $ores[$orn->id] = [
                                'count' => $c - 1,
                                'oren_id' => $orn->id,
                            ];
                        }
                    }
                }
            }
				}
        foreach ($ores as $ore) {
            $d = ($ore['count'] / $questions->count()) * 100;
            $os = Orentation::where('id', '=', $ore['oren_id'])->get();
            foreach ($os as $o) {
                $counts[] = [
                    'p' => round($d),
                    'n' => $o->title,
                    'id' => $o->id,
                ];
            }
				}
				
				rsort($counts);
				$counts[0]['p'] = $counts[0]['p'] * 3.33;
				
				$curl = 'quiz/result';
				$professions = ResultProfession::all()->where('orentation_id', $counts[0]['id'])->where('lang_id', $language->id);
        return view('quiz.result')->with([
						'counts' => $counts,
						'lg' => $language,
						'curl' => $curl,
						'professions' => $professions
        ]);
    }

    public function postResult(Request $request)
    {
        QuizResult::create([
            'user_id' => Auth::user()->id,
            'orentation_id' => $request->orentation,
            'quiz_id' => $request->quiz,
						'profession_id' => $request->profession,
						'lang_id' => $request->language
        ]);
        Session::flush();
        Session::regenerate();
        return redirect(app()->getLocale().'/quiz')->with('status', 'Added');
    }
}
