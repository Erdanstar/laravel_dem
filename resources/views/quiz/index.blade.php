@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($quizzes as $quiz)
        <article class="col-sm-12 col-md-6 col-lg-4 tile-item test full">
            <div>
                <div class="cover" style="background-image: url('{{$quiz->getImage()}}');"></div>
                <div class="body">
                    <div class="title">
                        <a class="nl" href="{{url('quiz/'. $quiz->slug . '/' . $quiz->getQuestionLimit($quiz->id)->id )}}" title="{{$quiz->title}}">{{$quiz->title}}</a>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>
@endsection
