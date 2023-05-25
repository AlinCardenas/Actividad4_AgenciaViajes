@props(['estado', 'pais', 'destino', 'fecha', 'aerolinea', 'precio'])
<div class="bg-white rounded-lg  shadow-lg p-6">
    <div class="border-l-4 border-blue-500 pl-4 w-full">
        <h2 class="text-lg font-semibold mb-2">Vuelo desde: {{$estado}}, {{$pais}}</h2>
        <p class="text-gray-600 mt-1">Destino: {{$destino}} </p>
        <p class="text-gray-600 mt-1">Fecha de salida: {{$fecha}} </p>
        <p class="text-gray-600 mt-1">Aerolinea: {{$aerolinea}} </p>
        <p class="text-gray-600 mt-1">Precio: ${{$precio}}</p>
    </div>
</div>