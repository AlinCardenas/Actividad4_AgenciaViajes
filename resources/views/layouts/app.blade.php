<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Agencia de viajes') }}</title>

        <!-- Fonts -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{--  --}}

        {{--  --}}

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased ">
        <!-- Contenido de la pagina -->
        <main>
            {{ $slot }}
        </main>
    </body>
    <script src=" {{asset('js/slider.js')}}"></script>
    <script defer src="{{asset('js/bundle.js')}}"></script>
</html>