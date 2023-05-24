<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agencia de Viajes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/theme.css')}}" rel="stylesheet">

    </head>
    <body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': true }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
        @include('partials.navbar')
        @include('partials.body')
        @include('partials.footer')
        <script defer src="{{asset('js/bundle.js')}}"></script>
        <script defer src="{{asset('js/loopple.js')}}"></script>
        
        
    </body>
</html>
