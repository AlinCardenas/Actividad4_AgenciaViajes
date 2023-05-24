@props(['ruta', 'title', 'country'])

<div class="relative">
    @php
        $val = "http://127.0.0.1:8000/storage/images/" . $ruta;
    @endphp
    <img src="{{$val}}" alt="..." {{$attributes->merge(['class' => 'h-52 w-full rounded-3xl blur-sm'])}} />
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col justify-center items-center">
        <p class=" text-3xl text-white font-semibold">{{$title}}</h1>
            <hr class="border-white border-1 w-full mb-4">
            <p class=" text-xl text-white font-semibold">🗺️ {{$country}}</h1>
    </div>
</div>