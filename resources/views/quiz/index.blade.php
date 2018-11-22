@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($quizzes as $quiz)
        <div class="col-sm-12 col-md-6 col-lg-4">
            @foreach ($quiz->questions as $question)
            <a class="quiz-btn" href="{{url('quiz/'. $quiz->slug . '/' . $question->getQuestionLimit($quiz->id)->id )}}" role="button">
                <img src="{{$quiz->getImage()}}" alt="">
                <span class="content">
                  <h1>{{$quiz->title}}</h1>
                </span>
            </a>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection
