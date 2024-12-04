<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet">
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

    </head>
    <body>
        Bienvenu sur mon Portfolio
        <a href="{{ route('stage1') }}">Exercice route</a>
        <img src="{{ asset('images/goku.png') }}">
        <button type="button" class="btn btn-primary">Primary</button>
        <i class="fa-solid fa-arrow-right"></i>
        
    </body>
</html>
