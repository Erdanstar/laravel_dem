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
            @include('layouts.profile-sidebar')
            <div class="col-md-9">
                <div class="profile-main">
                    @include('layouts.profile-top')
                    <div class="profile-main-information mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="name">ФИО</p>
                                <p class="birthday">Дата рождения</p>
                                <p class="sex">Пол</p>
                                <p class="class">Класс</p>
                                <p class="place">Место учебы</p>
                                <p class="school">Название школы</p>
                                <p class="class-profile">Профиль класса</p>
                                <p class="preselection">Предварительный выбор</p>
                                <p class="specalty">специальности обучения</p>
                                <p class="preselection">Предварительный выбор</p>
                                <p class="vuz">ВУЗа/ССУЗа обучения</p>
                            </div>
                            <div class="col-md-8">
                                <p class="name">{{ Auth::user()->surname }} {{ Auth::user()->name }} {{ Auth::user()->patronymic }}</p>
                                <p class="birthday">{{ Auth::user()->birthday }}</p>
                                <p class="sex">{{ Auth::user()->sex }}</p>
                                <p class="class">
                                    @if (Auth::user()->grade == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->grade }}
                                    @endif
                                </p>
                                <p class="place">
                                    @if (Auth::user()->edu_type == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->edu_type }}
                                    @endif
                                </p>
                                <p class="school">
                                    @if (Auth::user()->edu_type == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->edu_type }}
                                    @endif</p>
                                <p class="class-profile">
                                    @if (Auth::user()->profile_grade == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->profile_grade }}
                                    @endif
                                </p>
                                <p class="preselection" style="color: transparent">___</p>
                                <p class="specalty">
                                    @if (Auth::user()->profile_grade == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->profile_grade }}
                                    @endif</p>
                                <p class="preselection" style="color: transparent">___</p>
                                <p class="vuz">
                                    @if (Auth::user()->profile_grade == null)
                                        Не задано
                                    @else
                                        {{ Auth::user()->profile_grade }}
                                    @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
