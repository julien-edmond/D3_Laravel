<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

    </head>
    <body>
        Bienvenu sur mon Portfolio
        <a href="{{ route('stage1') }}">Exercice route</a>
        <img src="{{ asset('images/goku.png') }}">
    </body>
</html>
