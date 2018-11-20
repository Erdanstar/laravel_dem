<header class="main-header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="#" class="logo"><img src="img/logo.png" alt="Logo" /></a>
            </div>
            <div class="col-md-6">
                <ul class="main-nav d-flex align-items-center">
                    <li><a href="#">Кәсіби бағдар</a></li>
                    <li><a href="#">Жұмыс</a></li>
                    <li><a href="#">Мамандық</a></li>
                    <li><a href="#">Оқу</a></li>
                </ul>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <ul class="right-nav d-flex align-items-center">
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="img/location-icon.png" alt="Ваш город" />Ваш город
                        </a>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Выберите город</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      @foreach ($countries as $country)
                                        <a href="#" class="nav-link">{{$country->region}}</a>
                                      @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#"><img src="img/user-icon.png" alt="User" /></a></li>
                </ul>
            </div>
            <div class="col-md-1">
                <div class="lang text-right d-flex flex-column">
                    <a href="#" class="lang-link">Қазақша</a>
                    <a href="#" class="lang-link">Русский</a>
                </div>
            </div>
        </div>
    </div>
</header>
