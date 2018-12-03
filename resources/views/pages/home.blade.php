@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <div class="owl-carousel top-slider owl-theme">
                        <div class="item" style="background-image: url('img/slider-1.jpg')"></div>
                        <div class="item" style="background-image: url('img/slider-2.jpg')"></div>
                        <div class="item" style="background-image: url('img/slider-3.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="services">
                    <ul class="nav nav-tabs services-links d-flex flex-column justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="quiz-tab" data-toggle="tab" href="#quiz" role="tab" aria-controls="quiz" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.291 52.809">
                                    <defs>
                                        <style>.a{fill:#fff;}</style>
                                    </defs>
                                    <g transform="translate(-17.051)">
                                        <g transform="translate(17.051)">
                                            <g transform="translate(0)">
                                                <path class="a" d="M314.226,308.08a.88.88,0,0,0-.88-.88h-5.281a.88.88,0,1,0,0,1.76h5.281A.88.88,0,0,0,314.226,308.08Z" transform="translate(-277.26 -275.515)" />
                                                <path class="a" d="M326.011,47.948v-4.4a.88.88,0,1,0-1.76,0v4.4a4.406,4.406,0,0,0,4.4,4.4h7.921V69.071a.88.88,0,0,0,1.76,0v-17.6a.88.88,0,0,0-.88-.88h-8.8A2.644,2.644,0,0,1,326.011,47.948Z" transform="translate(-292.566 -38.266)" />
                                                <path class="a" d="M298.038,204.8H291a.88.88,0,1,0,0,1.76h7.041a.88.88,0,0,0,0-1.76Z" transform="translate(-261.952 -183.677)" />
                                                <path class="a" d="M211.826,205.68a.88.88,0,0,0-.88-.88h-5.281a.88.88,0,0,0,0,1.76h5.281A.88.88,0,0,0,211.826,205.68Z" transform="translate(-185.422 -183.677)" />
                                                <path class="a" d="M205.664,256a.88.88,0,1,0,0,1.76h1.76a.88.88,0,0,0,0-1.76Z" transform="translate(-185.421 -229.596)" />
                                                <path class="a" d="M205.664,155.361h8.8a.88.88,0,0,0,0-1.76h-8.8a.88.88,0,0,0,0,1.76Z" transform="translate(-185.421 -137.758)" />
                                                <path class="a" d="M256.864,257.761h8.8a.88.88,0,0,0,0-1.76h-8.8a.88.88,0,0,0,0,1.76Z" transform="translate(-231.34 -229.597)" />
                                                <path class="a" d="M308.064,358.4a.88.88,0,0,0,0,1.76h1.76a.88.88,0,0,0,0-1.76Z" transform="translate(-277.259 -321.434)" />
                                                <path class="a" d="M212.705,307.2h-7.041a.88.88,0,1,0,0,1.76h7.041a.88.88,0,1,0,0-1.76Z" transform="translate(-185.421 -275.515)" />
                                                <path class="a" d="M212.705,358.4h-7.041a.88.88,0,1,0,0,1.76h7.041a.88.88,0,1,0,0-1.76Z" transform="translate(-185.421 -321.434)" />
                                                <path class="a" d="M325.5,327.377l-1.76-1.76a3.307,3.307,0,0,0-4.765,0l-11.532,11.532a.882.882,0,0,0-.258.622v5.281a.88.88,0,0,0,.88.88h5.281a.881.881,0,0,0,.622-.258L325.5,332.142A3.225,3.225,0,0,0,325.5,327.377Zm-7.663,1.867,1.4,1.4-7.647,7.647-1.4-1.4Zm-8.891,12.927v-4.036l4.036,4.036Zm5.281-1.244-1.4-1.4,7.647-7.647,1.4,1.4ZM324.254,330.9l-1.138,1.138L319.08,328l1.138-1.138a1.5,1.5,0,0,1,2.276,0l1.76,1.76A1.48,1.48,0,0,1,324.254,330.9Z"
                                                  transform="translate(-277.259 -291.123)" />
                                                <path class="a" d="M44.335,51.048H21.452a2.644,2.644,0,0,1-2.64-2.64V4.4a2.644,2.644,0,0,1,2.64-2.64h27.8L57.8,10.3A.88.88,0,0,0,59.04,9.059l-8.8-8.8A.878.878,0,0,0,49.616,0H21.452a4.406,4.406,0,0,0-4.4,4.4V48.408a4.406,4.406,0,0,0,4.4,4.4H44.336a.88.88,0,0,0,0-1.76Z"
                                                  transform="translate(-17.051 0)" />
                                                <path class="a" d="M212.705,409.6h-7.041a.88.88,0,1,0,0,1.76h7.041a.88.88,0,0,0,0-1.76Z" transform="translate(-185.421 -367.353)" />
                                                <path class="a" d="M109.426,154.48a.88.88,0,0,0-.88-.88h-5.281a.88.88,0,0,0-.88.88v5.281a.88.88,0,0,0,.88.88h5.281a.88.88,0,0,0,.88-.88Zm-1.76,4.4h-3.521V155.36h3.521Z" transform="translate(-93.584 -137.757)" />
                                                <path class="a" d="M103.264,365.442h5.281a.88.88,0,0,0,.88-.88v-5.281a.88.88,0,0,0-.88-.88h-5.281a.88.88,0,0,0-.88.88v5.281A.88.88,0,0,0,103.264,365.442Zm.88-5.281h3.521v3.521h-3.521Z" transform="translate(-93.583 -321.435)" />
                                                <path class="a" d="M104.4,262.779a.881.881,0,0,0,.622.258.715.715,0,0,0,.087,0,.878.878,0,0,0,.645-.387l3.521-5.281a.88.88,0,1,0-1.465-.977l-2.925,4.388-1-1a.88.88,0,1,0-1.245,1.245Z" transform="translate(-93.58 -229.592)" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                Тест
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.021 64.774">
                                    <defs>
                                        <style>.a{fill:#fff;}</style>
                                    </defs>
                                    <g transform="translate(-0.499 0)">
                                        <path class="a" d="M177.577,166.2h-.42a1.5,1.5,0,0,0-1.5,1.5v3.6a2.431,2.431,0,0,0,2.429,2.428h12.525a2.431,2.431,0,0,0,2.429-2.428v-3.2h.019a3.067,3.067,0,0,0,0-6.133h-.019v-3.2a2.432,2.432,0,0,0-2.429-2.429h-3.2v-.019a3.067,3.067,0,0,0-6.133,0v.019h-3.2a2.432,2.432,0,0,0-2.429,2.429v3.6a1.5,1.5,0,0,0,1.5,1.5h.42a1.169,1.169,0,1,1,0,2.338Zm0-4.236h-.019v-3.2a.532.532,0,0,1,.531-.531h3.572a1.524,1.524,0,0,0,1.522-1.522v-.395a1.169,1.169,0,1,1,2.338,0v.395a1.524,1.524,0,0,0,1.522,1.522h3.572a.531.531,0,0,1,.531.531v3.6a1.5,1.5,0,0,0,1.5,1.5h.42a1.169,1.169,0,0,1,0,2.338h-.421a1.5,1.5,0,0,0-1.5,1.5v3.6a.532.532,0,0,1-.531.531H178.089a.532.532,0,0,1-.531-.531v-3.2h.019a3.067,3.067,0,0,0,0-6.133Zm0,0"
                                          transform="translate(-153.001 -133.866)" />
                                        <path class="a" d="M232.441,290.99h6.381A1.993,1.993,0,0,0,240.813,289v-7.126a10.546,10.546,0,0,1,2.542-7.011,19.764,19.764,0,0,0,4.947-13.088v-1.846a.949.949,0,0,0-1.9,0v1.846a17.869,17.869,0,0,1-4.472,11.832,12.439,12.439,0,0,0-3.017,8.266V289a.093.093,0,0,1-.093.093h-6.381a.949.949,0,1,0,0,1.9Zm0,0"
                                          transform="translate(-201.77 -226.217)" />
                                        <path class="a" d="M3.2,44.722H6.929a.018.018,0,0,1,.017.017v3.2a9.658,9.658,0,0,0,9.646,9.646,2.436,2.436,0,0,1,2.433,2.433V62.8A1.978,1.978,0,0,0,21,64.774h5.241a.949.949,0,0,0,0-1.9H21a.078.078,0,0,1-.078-.078V60.02a4.336,4.336,0,0,0-4.331-4.331,7.757,7.757,0,0,1-7.748-7.748v-3.2a1.918,1.918,0,0,0-1.915-1.915H3.2a.8.8,0,0,1-.562-1.358L5.23,38.872a12.259,12.259,0,0,0,3.615-8.726v-2.8A17.908,17.908,0,0,1,30.432,9.832,2.438,2.438,0,0,0,30.661,13l2.525,2.525a1.521,1.521,0,0,0,1.076.446,1.742,1.742,0,0,0,1.356-.725A1.169,1.169,0,1,1,37.271,16.9l-.279.279a1.524,1.524,0,0,0,0,2.153l2.525,2.525a2.427,2.427,0,0,0,3.435,0l.616-.616a17.769,17.769,0,0,1,1.067,6.1v1.94a.949.949,0,1,0,1.9,0v-1.94a19.636,19.636,0,0,0-1.5-7.567l.463-.463a1.5,1.5,0,0,0,0-2.117l-.3-.3a1.169,1.169,0,0,1,1.653-1.653l.3.3a1.5,1.5,0,0,0,2.117,0L51.808,13a2.427,2.427,0,0,0,0-3.435L42.952.712a2.427,2.427,0,0,0-3.435,0L37.258,2.971l-.014-.013a3.067,3.067,0,0,0-4.337,4.337l.014.013-.947.947A19.8,19.8,0,0,0,6.947,27.345v2.8A10.373,10.373,0,0,1,3.888,37.53L1.294,40.124a2.693,2.693,0,0,0,1.9,4.6ZM32,10.909l2.543-2.543a1.5,1.5,0,0,0,0-2.117l-.3-.3A1.169,1.169,0,0,1,35.9,4.3l.3.3a1.5,1.5,0,0,0,2.117,0L40.86,2.053a.53.53,0,0,1,.751,0l8.856,8.856a.53.53,0,0,1,0,.751l-2.259,2.26-.014-.014a3.067,3.067,0,0,0-4.337,4.337l.014.013-.634.634h0L41.61,20.517a.53.53,0,0,1-.751,0l-2.26-2.26.013-.013a3.067,3.067,0,1,0-4.337-4.337l-.013.014L32,11.661a.536.536,0,0,1,0-.751Zm0,0"
                                          transform="translate(0 0)" />
                                    </g>
                                </svg>
                                Тренинг
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="interview-tab" data-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.493 52.184">
                                    <defs>
                                        <style>.a{fill:#fff;}</style>
                                    </defs>
                                    <g transform="translate(-8.295)">
                                        <g transform="translate(8.295 25.073)">
                                            <path class="a" d="M25.186,259.36l-.031-.008a5.992,5.992,0,0,0,1.535-4.01v-4.519A4.83,4.83,0,0,0,21.866,246H15.675a1.019,1.019,0,0,0-1.019,1.019v8.324a5.993,5.993,0,0,0,1.535,4.01l-.031.008A8.677,8.677,0,0,0,8.3,267.988v4.1a1.019,1.019,0,0,0,1.019,1.019H32.032a1.019,1.019,0,0,0,1.019-1.019v-4.1A8.678,8.678,0,0,0,25.186,259.36Zm-4.513-.038a3.983,3.983,0,0,1-3.979-3.979V253.52a3.881,3.881,0,0,0,1.866.476h6.091v1.347A3.983,3.983,0,0,1,20.673,259.322Zm1.777,2.038-1.777,1.777L18.9,261.36Zm-5.755-13.322h5.172a2.789,2.789,0,0,1,2.786,2.786v1.134H18.561a1.868,1.868,0,0,1-1.866-1.866Zm-6.361,23.035v-3.085a6.637,6.637,0,0,1,5.741-6.567l3.878,3.878a1.019,1.019,0,0,0,1.441,0l3.878-3.878a6.637,6.637,0,0,1,5.741,6.567v3.085Z"
                                              transform="translate(-8.295 -246)" />
                                        </g>
                                        <g transform="translate(30.79 3.818)">
                                            <path class="a" d="M251.975,72.832a4.274,4.274,0,0,0,1.27-3.043V65.645a6.925,6.925,0,0,0-2.976-5.685,1.023,1.023,0,0,0,.025-.224V57.313a4.844,4.844,0,0,0,4.232-4.8V42.3a4.843,4.843,0,0,0-4.837-4.837H233.843a4.843,4.843,0,0,0-4.837,4.837V52.513a4.843,4.843,0,0,0,4.837,4.837h11.605l1.388,1.388c-.172-.013-.345-.022-.52-.022a6.937,6.937,0,0,0-6.929,6.929v4.144a4.274,4.274,0,0,0,1.27,3.043,8.65,8.65,0,0,0-5.029,7.846v4.131a1.019,1.019,0,0,0,1.019,1.019h19.337A1.019,1.019,0,0,0,257,84.809V80.678A8.65,8.65,0,0,0,251.975,72.832Zm-5.383-17.222a1.02,1.02,0,0,0-.721-.3H233.843a2.8,2.8,0,0,1-2.8-2.8V42.3a2.8,2.8,0,0,1,2.8-2.8h15.846a2.8,2.8,0,0,1,2.8,2.8v.055h-6.466a1.019,1.019,0,1,0,0,2.038h6.466v8.12a2.8,2.8,0,0,1-2.8,2.8h-.414a1.019,1.019,0,0,0-1.019,1.019v.944Zm-5.165,10.035a4.89,4.89,0,0,1,9.781,0v4.144a2.252,2.252,0,0,1-2.249,2.249h-5.282a2.252,2.252,0,0,1-2.249-2.249Zm13.54,18.144h-17.3V80.678a6.609,6.609,0,0,1,6.6-6.6h4.1a6.609,6.609,0,0,1,6.6,6.6Z"
                                              transform="translate(-229.006 -37.462)" />
                                        </g>
                                        <g transform="translate(12.463)">
                                            <path class="a" d="M65.881,0H54.026a4.843,4.843,0,0,0-4.837,4.837V15.051a4.844,4.844,0,0,0,4.232,4.8v2.423a1.019,1.019,0,0,0,1.74.721l3.106-3.106h5.3a1.019,1.019,0,1,0,0-2.038H57.845a1.02,1.02,0,0,0-.721.3l-1.665,1.665v-.944A1.019,1.019,0,0,0,54.44,17.85h-.414a2.8,2.8,0,0,1-2.8-2.8V4.837a2.8,2.8,0,0,1,2.8-2.8H65.881a1.019,1.019,0,0,0,0-2.038Z"
                                              transform="translate(-49.189)" />
                                        </g>
                                        <g transform="translate(32.127)">
                                            <path class="a" d="M243.856.3a1.02,1.02,0,0,0-1.741.721A1.02,1.02,0,1,0,243.856.3Z" transform="translate(-242.115)" />
                                        </g>
                                        <g transform="translate(42.532 8.71)">
                                            <path class="a" d="M345.944,85.759a1.018,1.018,0,1,0,.3.721A1.027,1.027,0,0,0,345.944,85.759Z" transform="translate(-344.204 -85.46)" />
                                        </g>
                                    </g>
                                </svg>
                                Сұхбат
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="quiz" role="tabpanel" aria-labelledby="quiz-tab" style="background-image: url('/img/quiz-bg.jpg')">
                            <div class="tab-body">
                                <div class="container">
                                    <h1>Кәсіби бағытыңызды білу үшін тестті өтіп көріңіз</h1>
                                    <p>Бұл тестте біз сізге 20 сұраққа жауап беру керек болады.
                                        Сіздің жауабыңыз арқылы сіздің қай салаға жақын екеніңізді
                                        шығарып береді.
                                    </p>
                                    <a href="{{route('quiz')}}" class="btn btn-outline-white">Тестке өту</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab" style="background-image: url('/img/training-bg.jpg')">
                            <div class="tab-body">
                                <div class="container">
                                    <h1>Кәсіби бағытыңызды білу үшін тестті өтіп көріңіз</h1>
                                    <p>Бұл тестте біз сізге 20 сұраққа жауап беру керек болады.
                                        Сіздің жауабыңыз арқылы сіздің қай салаға жақын екеніңізді
                                        шығарып береді.
                                    </p>
                                    <a href="#" class="btn btn-outline-white">Тестке өту</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab" style="background-image: url('/img/interview-bg.jpg')">
                            <div class="tab-body">
                                <div class="container">
                                    <h1>Кәсіби бағытыңызды білу үшін тестті өтіп көріңіз</h1>
                                    <p>Бұл тестте біз сізге 20 сұраққа жауап беру керек болады.
                                        Сіздің жауабыңыз арқылы сіздің қай салаға жақын екеніңізді
                                        шығарып береді.
                                    </p>
                                    <a href="#" class="btn btn-outline-white">Тестке өту</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="іздеу" aria-label="Search">
                        <button class="search-btn" type="submit"><img src="/svg/search-icon.svg" alt=""></button>
                    </form>
                </div>
                <div class="vacancies">
                    <h1>Ваканциялар</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="news">
                    <div class="news-header">
                        <h1>Жаңалықтар</h1>
                        <div class="dots">
                            <a href="#">
                                <div class="dot active"></div>
                            </a>
                            <a href="#">
                                <div class="dot"></div>
                            </a>
                            <a href="#">
                                <div class="dot"></div>
                            </a>
                        </div>
                    </div>
                    <div class="news-body">
                        <div class="news-carousel">
                            <div class="news-carousel-item">
                                @foreach ($posts as $post)
                                <div class="news-item">
                                    <div class="news-item-img" style="background-image: url('{{$post->getImage()}}')">
                                    </div>
                                    <div class="news-item-content">
                                      <a href="#">{{$post->title}}</a>
                                      <p>{{date("d/m/Y", strtotime($post->created_at))}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="after-news">
                    <h1>Сіздің өңіріңіздегі оқу түрлері</h1>
                </div>
                <div class="questions">
                    <div class="questions-header">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Сұрақ қою</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#qforms" id="qforms-tab" data-toggle="tab" role="tab" aria-controls="qforms" aria-selected="true">Сұрақ қою</a>
                                    <a class="dropdown-item" href="#cforms" id="cforms-tab" data-toggle="tab" role="tab" aria-controls="cforms" aria-selected="true">Пікір қалдыру</a>
                                    <a class="dropdown-item" href="#sforms" id="sforms-tab" data-toggle="tab" role="tab" aria-controls="sforms" aria-selected="true">Ұсыныс жасау</a>
                                    <a class="dropdown-item" href="#oforms" id="oforms-tab" data-toggle="tab" role="tab" aria-controls="oforms" aria-selected="true">Басқа</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="qforms" role="tabpanel" aria-labelledby="qforms-tab">
                            <div class="questions-form">
                                <form method="POST" action="/profile">
                                  @csrf
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Аты">
                                        <input class="form-control" name="email" type="text" placeholder="e-mail">
                                        <textarea name="question" class="form-control" rows="5" placeholder="Сұрақ"></textarea>
                                        <button type="submit" class="btn btn-primary">Сұрақ қою</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cforms" role="tabpanel" aria-labelledby="cforms-tab">
                            <div class="questions-form">
                                <form method="POST" action="/profile">
                                  @csrf
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Аты">
                                        <input class="form-control" name="email" type="text" placeholder="e-mail">
                                        <textarea name="question" class="form-control" rows="5" placeholder="Пікір"></textarea>
                                        <button type="submit" class="btn btn-primary">Пікір қалдыру</button>
                                    </div>
                                </form method="POST" action="/profile">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sforms" role="tabpanel" aria-labelledby="sforms-tab">
                            <div class="questions-form">
                                <form method="POST" action="/profile">
                                  @csrf
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Аты">
                                        <input class="form-control" name="email" type="text" placeholder="e-mail">
                                        <textarea name="question" class="form-control" rows="5" placeholder="Ұсыныс"></textarea>
                                        <button type="submit" class="btn btn-primary">Ұсыныс жасау</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="oforms" role="tabpanel" aria-labelledby="oforms-tab">
                            <div class="questions-form">
                                <form method="POST" action="/profile">
                                  @csrf
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Аты">
                                        <input class="form-control" name="email" type="text" placeholder="e-mail">
                                        <textarea name="question" class="form-control" rows="5" placeholder="Басқа"></textarea>
                                        <button type="submit" class="btn btn-primary">Жіберу</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="featured-professions">
                    <div class="owl-carousel owl-theme professions-owl">
                      @foreach ($professions as $profession)
                        <div class="professions-item">
                          <div class="featured-professions-content">
                              <h1>{{$profession->title}}</h1>
                              <p>{{$profession->description}}</p>
                          </div>
                          <div class="featured-professions-img" style="background-image: url('{{$profession->category->getImage()}}');">
                          </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div class="actually-professions">
                    <div class="col-md-6">
                      <div class="actually-professions-in-kz">
                        <div class="owl-carousel owl-theme professions-owl">
                        @foreach ($professions as $profession)
                          <div class="professions-item" style="background-image: url('{{$profession->category->getImage()}}');">
                            <div class="actually-professions-content">
                                <h1>{{$profession->title}}</h1>
                                <p>{{$profession->description}}</p>
                            </div>
                          </div>
                        @endforeach
                      </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="actually-professions-in-region">
                        <div class="owl-carousel owl-theme professions-owl">
                        @foreach ($professions as $profession)
                          <div class="professions-item" style="background-image: url('{{$profession->category->getImage()}}');">
                            <div class="actually-professions-content">
                                <h1>{{$profession->title}}</h1>
                                <p>{{$profession->description}}</p>
                            </div>
                          </div>
                        @endforeach
                      </div>
                      </div>
                    </div>
                </div>

                <div class="video">
                    <iframe width="100%" height="447" src="https://www.youtube.com/embed/LNjLq5TMi8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Сұрақ-жауап</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Пікір</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sentences-tab" data-toggle="tab" href="#sentences" role="tab" aria-controls="sentences" aria-selected="false">Ұсыныс</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Басқа</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="question_list">
                                <div class="question">
                                    <h3 class="question"></h3>
                                    <span class="author">

                                    </span>
                                    <span class="tags">

                                    </span>
                                    <span class="views">

                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                            <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-4">Fluid jumbotron</h1>
                                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sentences" role="tabpanel" aria-labelledby="sentences-tab">
                            <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1>Fluid jumbotron</h1>
                                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                            <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-4">Fluid jumbotron</h1>
                                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="partners">
                    <div class="partners-inner">
                        <a href="#" class="egov"><img src="/img/egov_logo.png" alt=""></a>
                        <a href="#" class="enbekkz"><img src="/img/enbekkz_logo.png" alt=""></a>
                        <a href="#" class="mintruda"><img src="/img/mintruda_logo.png" alt=""></a>
                        <a href="#" class="enbek"><img src="/img/enbek_logo.png" alt=""></a>
                        <a href="#" class="akimat"><img src="/img/akimat_logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-footer-content">
                        <div class="social">
                            <a href="#"><img src="/img/facebook-icon.png" alt=""></a>
                            <a href="#"><img src="/img/instagram-icon.png" alt=""></a>
                            <a href="#"><img src="/img/vk-icon.png" alt=""></a>
                            <a href="#"><img src="/img/youtube-icon.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-footer-form">
                        <div class="form-header">
                            <h1>Жеке кабинет</h1>
                        </div>
                        <form action="">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="e-mail">
                                <input type="email" class="form-control" placeholder="пароль">
                                <div class="buttons">
                                    <button type="submit" class="btn btn-primary">Кіру</button>
                                    <button type="submit" class="btn btn-outline">Тіркелу</button>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">
                                    <a href="#" class="remember-password">пароль?</a>
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
@endsection
