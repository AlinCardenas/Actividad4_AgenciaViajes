@props(['title'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @include('flatpickr::components.style')
    @include('flatpickr::components.script')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
    {{$slot}}
</body>
</html>