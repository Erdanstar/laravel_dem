@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="skill">
                <form method="POST" action="/{{ app()->getLocale() }}/quiz/post" accept-charset="UTF-8"
										class="question ajax challenge">
										@csrf
                    <input name="question_id" type="hidden" value="{{ $question->id }}">
                    <input name="quiz_id" type="hidden" value="{{ $quiz->id }}">
                    <input name="nextUrl" type="hidden" value="{{ $next['url'] }}">
                    <input name="nextClass" type="hidden" value="{{ $next['class'] }}">
                    <input name="nextText" type="hidden" value="{{ $next['text'] }}">

                    <h4 class="skill-title">{{$question->question_text}}</h4>
                    @foreach($options as $answer)
                    <div class="skill-radio">
                        <label class="skill-radio-title">
														<input id="{{ $answer->id }}" name="correct" type="radio" value="{{ $answer->id }}" required>
                            <i class="far fa-circle"></i><i class="fas fa-check-circle"></i>{{ $answer->option_text }}
                        </label>
										</div>
                    @endforeach
                    <button type="submit" class="next-question-button btn {{ $next['class'] }}">{{$next['text']}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
