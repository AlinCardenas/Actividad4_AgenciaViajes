@props(['ruta', 'origen', 'precio', 'destino', 'aerolinea'])

<div class="items-center mt-8 w-72 bg-white">
    @php
        $val = "http://127.0.0.1:8000/storage/images/" . $ruta;
    @endphp
    <img src="{{$val}}" class="rounded-lg " />
    <div class="mb-2 leading-tight p-4">
        <p class="text-2xl text-bold text-start mb-2 text-black">🛫 Vuelos a {{$destino}}</p>
        <div class="text-gray text-xl font-semibold">
            <p class=" mb-2 ">
                Partiendo desde {{$origen}} <br> con {{$aerolinea}}
            </p>
        </div>
        <p class="font-bold text-[#34bf49]">${{$precio}} mx</p>
    </div>
</div>