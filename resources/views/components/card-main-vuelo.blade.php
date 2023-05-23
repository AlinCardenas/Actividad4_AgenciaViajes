@props(['ruta', 'descripcion', 'precio', 'destino'])

<div class="items-center mt-8 w-72 bg-white">
    <img src="{{$ruta}}" class="rounded-lg " />
    <div class="mb-2 text-sm font-medium leading-tight p-4">
        <p class="text-xl text-start mb-2 ">{{$destino}}</p>
        <div>
            <p class="font-normal mb-2">{{$descripcion}}.</p>
        </div>
        <p class=" text-green-600">${{$precio}} mx</p>
    </div>
</div>