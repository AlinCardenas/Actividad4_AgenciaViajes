@props(['ruta', 'nombre'])

<div class="text-center">
    @php
        $val = "http://127.0.0.1:8000/storage/img/" . $ruta;
    @endphp
    <img src="{{$val}}" class="mx-auto mb-4 w-24 h-24 rounded-full" alt="Avatar" />
    <p class="mb-2 text-xl font-medium leading-tight">{{$nombre}}</h5>
</div>