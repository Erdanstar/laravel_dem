@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($counts as $result)
            <label for="file">{{$result['n']}}</label>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{{$result['p']}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$result['p']}}%">
                    {{$result['p']}}% Complete (success)
                </div>
            </div>
        @endforeach
            <a href="{{ route('result.quiz.post') }}" class="btn btn-primary">Add</a>
    </div>
</div>
@endsection