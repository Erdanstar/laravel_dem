@extends('layouts.app')

@section('content')
<div class="container">
    <div class="professions">
        <div class="row">
            <div class="professions-top col-md-12" style="background-image: url({{ asset('img/professions-top.jpg') }})"></div>
            <div class="col-md-3 pl-0">
                <div class="search">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="поиск" aria-label="Search">
                        <button class="search-btn" type="submit"><img src="/svg/search-icon.svg" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="professions-header">
                    <div class="row d-flex align-items-end">
                        <div class="col-md-8">
                            <div class="professions-header-title">
                                <h1>Выберите отрасль которая вас интересует:</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="professions-header-oyu-link">
                                <div class="oyu">
                                    <img src="{{ asset('img/oyu.png') }}" alt="">
                                </div>
                                <div class="professions-header-link">
                                    <a href="{{ asset('documents/klassificator.pdf') }}">
                                        <p>Классификатор специальностей
                                            высшего и послевузовского образования
                                            Республики Казахстан</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 professions-list d-flex flex-column align-items-center">
                <div class="professions-list-items">
                    <ul class="nav">
                        <div class="row">
                            @foreach ($profession_categories as $category)
                            <li class="professions-list-items-item col-md-3">
                                <a data-toggle="tab" href="#category{{ $category->id }}">
                                    <div class="img" style="background-image: url({{ $category->getImage() }})">
                                    </div>
                                    {{ $category->title }}
                                </a>
                            </li>
                            @endforeach
                        </div>
                    </ul>
                </div>
                {{ $profession_categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
