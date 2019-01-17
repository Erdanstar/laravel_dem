@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 educations-top" style="background-image: url({{ asset('img/educations-top.jpg') }})">
            <a href="{{ asset('documents/klassificator.pdf') }}">
                <p>Классификатор специальностей 
                        высшего и послевузовского образования 
                        Республики Казахстан</p>
            </a>
        </div>
        <div class="col-md-3 pl-0">
            <div class="search edu">
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="поиск" aria-label="Search">
                    <button class="search-btn" type="submit"><img src="/svg/search-icon.svg" alt=""></button>
                </form>
            </div>
            <div class="regions-sidebar">
                <div class="regions-sidebar-title">
                    <h1>РЕГИОН</h1>
                </div>
                <div class="regions-sidebar-region">
                    @if($type == null)
                    <a href="/{{ app()->getLocale() }}/educations">Все</a>
                    @else
                    <a href="/{{ app()->getLocale() }}/educations?type={{ $type }}">Все</a>
                    @endif
                    @foreach ($countries as $country)
                        <div class="region">
                            @if ($country->region == null)
                                @if(!($type == null))
                                    <a href="/{{ app()->getLocale() }}/educations?type={{ $type }}&country={{ $country->id }}">{{ $country->city }}</a>
                                @else
                                    <a href="/{{ app()->getLocale() }}/educations?country={{ $country->id }}">{{ $country->city }}</a>
                                @endif
                            @else
                                <a href="#">{{ $country->region }}</a>
                            @endif
                            <p>{{ $country->universities->count() }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="educations-header">
                <div class="row d-flex align-items-end">
                    <div class="col-md-6">
                        <div class="educations-header-title">
                            @if ($ctry == null)
                            <h1>Выберите регион</h1>
                            @else
                            @if($ctry->region == null)
                            <h1>{{ $ctry->city }}</h1>
                            @else
                            <h1>{{ $ctry->region }} > {{ $ctry->city }}</h1>
                            @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="educations-header-nav">
                            @if($ctry == null)
                            <li><a href="/{{ app()->getLocale() }}/educations">Все</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=1">Университет</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=2">Колледж</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=3">Курс</a></li>
                            @else
                            <li><a href="/{{ app()->getLocale() }}/educations?country={{ $ctry->id }}">Все</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=1&country={{ $ctry->id }}">Университет</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=2&country={{ $ctry->id }}">Колледж</a></li>
                            <li><a href="/{{ app()->getLocale() }}/educations?type=3&country={{ $ctry->id }}">Курс</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="educations-content">
                <div class="educations-content-universities">
                    <div class="row">
                        @foreach ($universities as $university)
                        <div class="col-md-3">
                            <a href="/{{ app()->getLocale() }}/educations/institution/{{ $university->id }}" class="university-title">
                                <div class="university-title-img" style="background-image: url({{ $university->getLogo() }})">
                                    {{-- <img src="{{ $university->getLogo() }}" alt="" class="img-responsive"> --}}
                                </div>
                                <p>{{ $university->name }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{ $universities->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
