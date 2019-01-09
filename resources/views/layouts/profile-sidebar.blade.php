<div class="col-md-12 mb-4">
    <div class="profile-top-img" style="background-image: url({{ asset('img/profile-top-img.jpg') }});"></div>
</div>
<div class="col-md-3">
    <div class="profile-sidebar">
        <div class="profile-sidebar-user">
            <div class="profile-sidebar-user-avatar">
                <img src="{{ Auth::user()->getAvatar() }}" alt="">
            </div>
            <div class="profile-sidebar-user-name">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        <ul class="profile-sidebar-menu mt-2">
            <li class="profile-sidebar-menu-item">
                <a href="{{ route('profile') }}">Мой профиль</a>
            </li>
            <li class="profile-sidebar-menu-item">
                <a href="#">Мои резюме</a>
            </li>
            <li class="profile-sidebar-menu-item">
                <a href="{{ route('profile.quiz') }}">Мои результаты тестов</a>
            </li>
            <li class="profile-sidebar-menu-item">
                <a href="#">Мои сообщения</a>
            </li>
            <li class="profile-sidebar-menu-item">
                <a href="#">Избранное</a>
            </li>
            <li class="profile-sidebar-menu-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>