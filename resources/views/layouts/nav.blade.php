<header class="main-header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="#" class="logo"><img src="img/logo.png" alt="Logo"/></a>
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
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="img/location-icon.png" alt="Ваш город"/>Ваш город <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('quiz') }}">
                              Test
                          </a>
                      </div>
                  </li>
                    <li><a href="#"><img src="img/user-icon.png" alt="User"/></a></li>
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
