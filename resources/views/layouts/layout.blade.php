<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project Gusev</title>
    <link rel="stylesheet" href="{{ URL::asset("css/style.css") }}">
</head>

<body>
    <nav class="navigation">
        <ul class="navigation_main">
            <li><a href="/" class="navigation_link">Главная</a></li>
            @if(Auth::guest())
            <li><a href="/login" class="navigation_link">Вход</a></li>
            <li><a href="/registration" class="navigation_link">Регистрация</a></li>
            @else
            @can('get-things')
            <li><a href="/things" class="navigation_link">Вещи</a></li>
            @endcan
            @can('crud-places')
            <li><a href="/places" class="navigation_link">Места</a></li>
            @endcan
            <li><a href="/uses" class="navigation_link">Использование</a></li>
            <li><a href="/logout" class="navigation_link">Выйти</a></li>
            @endif
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>