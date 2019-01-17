<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuizQuestionOption;
use App\QuizQuestion;
use App\Quiz;
use App\Language;

class QuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $questions = QuizQuestion::all();
      return view('admin.quiz.questions.index', compact(
        'questions'
      ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $relations = [
          'quizzes' => Quiz::get()->pluck('title', 'id')->prepend('Please select', ''),
      ];
      return view('admin.quiz.questions.create', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $question = QuizQuestion::add($request->all());

      foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option_text') !== false && $value != '') {
                QuizQuestionOption::add([
                    'question_id' => $question->id,
                    'option_text'      => $value
                ]);
            }
        }

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      QuizQuestion::find($id)->remove();
      return redirect()->route('questions.index');
    }

    public function getOptions($id) {
        $states = QuizQuestionOption::where("question_id",$id)->pluck("option_text","id");
        return json_encode($states);
    }
}
