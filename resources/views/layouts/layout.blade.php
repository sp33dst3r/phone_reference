<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('/public/css/main.css') }}">
        <script src="{{ URL::asset('/public/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ URL::asset('/public/js/main.js') }}"></script>
    </head>
    <body>
        <?php
            #dd(request());

            ?>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand {{ Request::is('/') ? 'active' : '' }}" href="/">Список номеров</a>
                <a class="navbar-brand {{ Request::is('add') ? 'active' : '' }}" href="/add">Добавить номер</a>
            </nav>


            @yield('content')
        </div>
    </body>
</html>
