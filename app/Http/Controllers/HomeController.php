<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestAnswer;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function tests($question)
    {
      $answersForCount = TestAnswer::all();
      $answersCount = $answersForCount->count();
      $count = $answersCount/2;
      $left = $count-1;
      $first = TestAnswer::getFirstAnswer($question);
      $second = TestAnswer::getSecondAnswer($question);
      $answers = [$first, $second];
    	return view('tests.answer', compact('answers', 'count', 'left'));
    }

}
