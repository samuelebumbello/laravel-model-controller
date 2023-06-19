<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}"> --}}

        <title>Laravel movies | @yield('title')</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>

    <body>
            @include('partials.header')

            @yield('content')

            @include('partials.footer')
    </body>
</html>
