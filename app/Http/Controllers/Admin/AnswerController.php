<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\TestAnswer;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $answers = TestAnswer::all();
      return view('admin.tests.answers.index', compact('answers'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.tests.answers.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
        'answer_number' =>'required',
        'answer'   =>  'required',
    ]);

    $answer = TestAnswer::add($request->all());
    return redirect()->route('answers.index');
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
    $answer = TestAnswer::find($id);
    return view('admin.tests.answers.edit', compact(
        'answer'
    ));
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
    $this->validate($request, [
        'answer_number' =>'required',
        'answer'   =>  'required',
    ]);

    $answer = TestAnswer::find($id);
    $answer->edit($request->all());

    return redirect()->route('answers.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    TestAnswer::find($id)->remove();
    return redirect()->route('answers.index');
  }
}
