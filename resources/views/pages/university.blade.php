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
                    <a href="/educations">Все</a>
                    @foreach ($countries as $country)
                    <div class="region">
                        @if ($country->region == null)
                        <a href="/educations?country={{ $country->id }}">{{ $country->city }}</a>
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
                <div class="educations-header-title">
                    @if($university->country->region == null)
                    <h1>{{ $university->country->city }}</h1>
                    @else
                    <h1>{{ $university->country->region }} > {{ $university->country->city }}</h1>
                    @endif
                    <h3>{{ $university->name }}</h3>
                </div>
            </div>
            <div class="educations-content">
                <div class="educations-content-item">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 pr-0 d-flex flex-column align-items-end">
                            <div class="university">
                                <div class="university-img img-responsive" style="background-image: url({{ $university->getLogo() }})"></div>
                                <div class="university-description">
                                    <div class="name">{{ $university->name }}</div>
                                    <div class="phone">{{ $university->phone }}</div>
                                    <div class="site">{{ $university->site }}</div>
                                    <div class="address">{{ $university->address }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
