@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="jumbotron">
                {!! Form::open([
                  'route' => 'post.quiz',
                  'method' => 'post',
                  'class'=>'question ajax challenge'
                  ]) !!}
                {!! Form::hidden('question_id', $question->id) !!}
                {!! Form::hidden('quiz_id', $quiz->id) !!}
                {!! Form::hidden('nextUrl', $next['url']) !!}
                {!! Form::hidden('nextClass', $next['class']) !!}
                {!! Form::hidden('nextText', $next['text']) !!}

                <p class="lead">{{$question->question_text}}</p>
                @foreach($options as $answer)
                <div class="radio">
                    <label>
                        {!! Form::radio('correct', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                        <i class="far fa-circle"></i><i class="fas fa-check-circle"></i>{{ $answer->option_text }}
                    </label>
                </div>
                @endforeach
                <button type="submit" class="next-question-button btn {{ $next['class'] }}">{{$next['text']}}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
