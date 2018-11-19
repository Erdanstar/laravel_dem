<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Post;
use App\QuizQuestion;
use App\QuizQuestionOption;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest()->paginate(5);
      return view('pages.home', ['posts' => $posts]);
    }

    public function test()
    {
      $quizzes = Quiz::all();
      return view('quiz.index', ['quizzes'=>$quizzes]);
    }

    public function showTest($slug, $question_id)
    {
      $topic = Quiz::where('slug', '=', $slug)->first();
      // may needs to be refactored, may check sql queries
      $question = QuizQuestion::getByTopicAndQuestionNumber($slug, $question_id);
      $question->options = QuizQuestionOption::where('question_id', $question->id)->inRandomOrder()->get();
      $options = $question->options;
      return view('quiz.show')->with([
          'questionNumber' => $question_id,
          'quiz'          => $topic,
          'question'       => $question,
          'options'        => $options,
      ]);

    }

}
