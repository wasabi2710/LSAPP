<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LSAPP')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- custom stylesheet -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- sass/bootstrap -->
        @vite(['resources/js/app.js', 'resources/css/app.scss'])
    </head>
    <body>
        @include('inc.navbar')
        <div class="container pb-5 pt-4">
            @yield('content')
        </div>
    </body>
</html>