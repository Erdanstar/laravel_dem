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
                            <div class="oyu">
                                <img src="" alt="">
                            </div>
                            <div class="professions-header-link">
                                <a href="#">Классификатор специальностей 
                                        высшего и послевузовского образования 
                                        Республики Казахстан</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 professions-list">
                <div class="professions-list-items">
                    <div class="row">
                        @foreach ($profession_categories as $category)
                            <a href="/professions/item/{{ $category->id }}" class="professions-list-items-item col-md-3">
                                <div class="professions-list-items-item-img">
                                    <img src="{{ $category->getImage() }}" alt="" class="img-responsive">
                                </div>
                                {{ $category->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
