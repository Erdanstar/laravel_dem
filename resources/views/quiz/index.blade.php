@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @foreach ($quizzes as $quiz)
        <div class="col-md-4">
            <div class="jumbotron">
                <h1 class="display-4">{{$quiz->title}}</h1>
                <p class="lead">В этом тесте  вопросов</p>
                <hr class="my-4">
                @foreach ($quiz->questions as $question)
                  <a class="btn btn-primary btn-lg" href="{{url('quiz/'. $quiz->slug . '/' . $question->getQuestionLimit($quiz->id)->id )}}" role="button">Пройти</a>
                @endforeach

            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
