<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="indev" style="background-image:url('/img/in-dev.jpg');">
        <div class="indev-text" >
            Введется разработка страниц...
        </div>
        <div class="indev-back">
            <a href="/{{ app()->getLocale() }}">Вернутся на главную страницу</a>
        </div>
        <div class="indev-bey"><a href="https://bey.kz/">ТОО "Bey Information Technology"</a></div>
    </div>
</body>
</html>
