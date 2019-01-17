@extends('layouts.app')

@section('content')
<div class="quiz-results">
    <div class="container">
        <div class="row">
            @foreach ($counts as $result)
            <div class="col-md-12">
                <div class="row d-flex justify-content-center">
                    <label for="file" class="col-md-6">{{$result['n']}}</label>
                    <div class="progress col-md-6">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$result['p']}}" aria-valuemin="0"
                            aria-valuemax="100" style="width:{{$result['p']}}%">
                            {{$result['p']}}%
                        </div>
                    </div>
                    <hr class="col-md-12">
                </div>
            </div>
						@endforeach
						<div class="title">
								<h1>Наш тест выявил результаты ваших интересов и подобрал профессий которые подходять вам</h1>
						</div>
						<form action="/{{ app()->getLocale() }}/quiz/result/post" method="post" class="col-md-12">
								@csrf
                <div class="row">
                    @foreach($professions as $pro)
                    <div class="col-md-3">

                        <input type="hidden" name="orentation" value="{{ $pro->orentation->id }}">
                        <input type="hidden" name="quiz" value="{{ $pro->orentation->quiz->id }}">
                        <input type="hidden" name="profession" value="{{ $pro->id }}">
                        <input type="hidden" name="language" value="{{ $pro->language->id }}">

                        <button type="submit" class="result_profession">
                            <div class="img" style="background-image: url({{ $pro->getImage() }})">
														</div>
														<p>{{ $pro->title }}</p>
                        </button>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
