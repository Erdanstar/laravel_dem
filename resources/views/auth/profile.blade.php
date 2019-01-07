@extends('layouts.app')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-sidebar-user">
                        <div class="profile-sidebar-user-avatar">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" alt="">
                        </div>
                        <div class="profile-sidebar-user-name">
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                    <ul class="profile-sidebar-menu mt-2">
                        <li class="profile-sidebar-menu-item">
                            <a href="#">Тесттер</a>
                        </li>
                        <li class="profile-sidebar-menu-item">
                            <a href="#">Мамандықтар</a>
                        </li>
                        <li class="profile-sidebar-menu-item">
                            <a href="#">Мамандықтар</a>
                        </li>
                        <li class="profile-sidebar-menu-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-main">
                    <div class="profile-main-information">
                        <div class="profile-main-information-test-count">

                            <p>{{ $user->quizResults->count() }}</p>
                        </div>
                        <div class="profile-main-information-test-last">
                            @if($user->quizResults->first() == null)
                                <p>Тест не пройдена</p>
                            @else
                                <a href="#">{{ $user->quizResults->first()->orentation->title }}</a>
                            @endif
                        </div>
                        <div class="profile-main-information-test-vocancies">
                            <p>25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
