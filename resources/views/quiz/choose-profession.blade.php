@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-12">{{ $orentation->title }}</h1>
            <form action="{{ route('result.quiz.post') }}" method="post">
                @csrf
                @foreach($professions as $profession)
                    <div class="form-check col-md-12">
                        <input type="hidden" value="{{ $orentation->id }}" name="orentation">
                        <input type="hidden" value="{{ $orentation->quiz->id }}" name="quiz">
                        <input class="form-check-input" type="radio" name="profession" id="professions{{$profession->id}}" value="{{ $profession->id }}">
                        <label class="form-check-label" for="professions{{$profession->id}}">
                            {{ $profession->title }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
