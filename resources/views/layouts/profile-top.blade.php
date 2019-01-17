<div class="profile-main-top">
    <ul class="profile-main-top-nav">
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-user.svg') }}" alt="">
            <a href="/{{ app()->getLocale() }}/profile">Мой профиль</a>
        </li>
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-resume.svg') }}" alt="">
            <a href="#" class="text-center">Мои резюме</a>
        </li>
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-quiz.svg') }}" alt="">
            <a href="/{{ app()->getLocale() }}/profile/quiz" class="text-center">Мои результаты тестов</a>
        </li>
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-message.svg') }}" alt="">
            <a href="#" class="text-center">Мои сообщения</a>
        </li>
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-star.svg') }}" alt="">
            <a href="#" class="text-center">Избранное</a>
        </li>
        <li class="profile-main-top-nav-item">
            <img src="{{ asset('img/profile-logout.svg') }}" alt="">
            <a href="/{{ app()->getLocale() }}/logout" class="text-center" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="/{{ app()->getLocale() }}/logout" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
