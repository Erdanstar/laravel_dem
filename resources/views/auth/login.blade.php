@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="form-wrapper">

                <form method="POST" action="/{{ app()->getLocale() }}/login">
                    @csrf
                    <h2>Личный кабинет</h2>
                    <div class="form-group">

                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail"
                            tabindex="1" name="email" id="email" type="email" required>
                        <svg class="registration__icon" width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 0H2C.9 0 0 .9 0 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V2l8 5 8-5v2z"
                                fill="#757575" fill-rule="evenodd" opacity=".3"></path>
                        </svg>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Пароль"
                            tabindex="2" name="password" id="password" type="password" required>
                        <svg class="registration__icon  registration__icon--lock" width="16" height="21" viewBox="0 0 16 21"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 7h-1V5c0-2.8-2.2-5-5-5S3 2.2 3 5v2H2C.9 7 0 7.9 0 9v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H4.9V5c0-1.7 1.4-3.1 3.1-3.1 1.7 0 3.1 1.4 3.1 3.1v2z"
                                fill="#757575" fill-rule="evenodd" fill-opacity=".3"></path>
                        </svg>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Запомнить') }}
                        </label>
                    </div>

                    <div class="form-group buttons">
                        <button id="sign-in" class="btn btn-primary" type="submit">Войти</button>
                        <p>Новый пользователь? 
                            <a href="/{{ app()->getLocale() }}/register" class="">Регистрация</a>
                        </p>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        <a class="btn btn-link" href="/{{ app()->getLocale() }}/password/reset">
                            Забыли пароль?
                        </a>
                    </small>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
