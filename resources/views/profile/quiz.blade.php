@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
        </div>
        @include('layouts.profile-sidebar')
        <div class="col-md-9">
            @include('layouts.profile-top')
            <div class="profile-quiz">
                <div class="profile-main-information">
                    <div class="row">
                        @if (Auth::user()->quizResults->count() > 0)
                            @foreach (Auth::user()->quizResults as $result)
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $result->quiz->title }}</h5>
                                        <p class="card-text" style="line-height: 20px">{{ $result->profession->title }}</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Тест еще не пройдена</h5>
                                    <p class="card-text" style="line-height: 20px">Пожалуйста пройдите тест по ссылке ниже</p>
                                    <a href="#" class="card-link">Пройти тест</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
