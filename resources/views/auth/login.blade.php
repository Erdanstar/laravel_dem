@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="form-wrapper">

                <form method="POST" action="{{ route('login') }}">
                  @csrf
                    <h2>Личный кабинет</h2>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="e-mail" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="пароль" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Запомнить') }}
                        </label>
                    </div>

                    <div class="form-group buttons">
                        <button type="submit" class="btn btn-primary">
                            ВОЙТИ
                        </button>
                        <a href="{{route('register')}}" class="btn btn-outline">РЕГИСТРАЦИЯ</a>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            пароль?
                        </a>
                    </small>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
