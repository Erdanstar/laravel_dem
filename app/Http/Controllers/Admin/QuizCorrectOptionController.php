<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz;
use App\Orentation;
use App\QuizQuestion;
use App\QuizCorrectOption;

class QuizCorrectOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $corrects = QuizCorrectOption::all();
      return view('admin.quiz.correctOptions.index', compact(
        'corrects'
      ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $relations = [
          'quizzes' => Quiz::get()->pluck('title', 'id')->prepend('Please select', ''),
          'questions' => QuizQuestion::get()->pluck('question_text', 'id')->prepend('Please select', ''),
          'orentations' => Orentation::get()->pluck('title', 'id')->prepend('Please select', ''),
      ];
      return view('admin.quiz.correctOptions.create', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = QuizCorrectOption::add($request->all());
        return redirect()->route('corrects.index');
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
        //
    }
}
