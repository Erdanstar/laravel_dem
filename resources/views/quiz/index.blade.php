@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        @foreach ($quizzes as $quiz)
          <div class="col-md-4">
            <div class="quiz-items">
              <div class="quiz-item">
                <img src="{{$quiz->getImage()}}" alt="{{$quiz->title}}" width="154" height="154">
                <a class="quiz-item-link" href="{{url($quiz->getQuestionLimit($quiz->id))}}">{{$quiz->title}}</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
