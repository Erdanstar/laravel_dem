@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="jumbotron">
                <h1 class="display-4">{{$quiz->title}}</h1>
                <p class="lead">{{$question->question_text}}</p>
                <hr class="my-4">
                @foreach($options as $answer)
                <div class="radio">
                    <label>
                        {!! Form::radio('chosenAnswer', $answer->id, null, ['id' => $answer->id, 'class' => 'required']) !!}
                        {{ $answer->option_text }}
                    </label>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
