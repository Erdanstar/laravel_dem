@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="quiz-header">
                    <h1>Профориентация: важность правильных решений</h1>
                    <h5>Выбор профессии – очень важное решение. Оно влияет не только будущее материальное благополучие
                        человека и его профессиональную успешность, но и на самооценку,
                        психологический комфорт и, даже на то, будет ли он ощущать себя счастливым.</h5>
                    <h5>Чтобы выбор профессии не стал ошибочным, психологи рекомендуют пройти тест на профориентацию.
                        Это
                        помогает определить профессиональные склонности,
                        способности и личностные особенности человека. Проходить такой тест нужно регулярно, начиная с
                        подросткового возраста (с 13-14 лет), поскольку часто бывает,
                        что предпочтения и интересы людей меняются под влиянием множества факторов. У школьников
                        представление о будущей профессии часто носит фантазийный,
                        романтический характер, формируюсь посредством кинофильмов и книг, не имеющих отношения к
                        реальности. Поэтому существует множество тестов разной степени сложности,
                        призванных помочь юным сделать правильный выбор профессии.</h5>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row d-flex align-items-stretch">
                    @foreach ($quizzes as $quiz)
                    <div class="quiz-card col-md-3 d-flex flex-column justify-content-stretch">
                        <div class="quiz-card-title" style="background-image: url({{ $quiz->getImage() }})">
                            <p>{{ $quiz->title }}</p>
                        </div>
                        <div class="quiz-card-desc">
                            <div class="quiz-card-description">{{ $quiz->description }}</div>
                            @if($quiz->questions->count() != 0)
                            <a href="/{{ app()->getLocale() }}/quiz/{{ $quiz->slug }}/{{ $quiz->questions->first()->id }}"
                                class="quiz-card-link btn btn-round">Пройти
                                тест</a>
                            @else
                            <a href="/{{ app()->getLocale() }}/indev" class="quiz-card-link btn btn-round">Пройти
                                тест</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="quiz-training">
                    <p>Наш тренинг — это помощь в определении подросткам своего места в профессиональном мире. Он
                        создан
                        для того, чтобы еще на один шаг ввести школьников в мир профессий, дать информацию для
                        дальнейшего
                        выбора, возможно, заинтересовать той или иной областью профессий и подвести учащихся к
                        взвешенному,
                        самостоятельному выбору профессиональной деятельности, сформировать психологическую готовность
                        к
                        профессиональному самоопределению.</p>
                    <a href="#" class="quiz-training-link">Подать заявку</a>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="quiz-psicholog" style="background-image: url({{ asset('img/psicholog.gif') }})"></div>
            </div>
        </div>
    </div>
</main>
@endsection
