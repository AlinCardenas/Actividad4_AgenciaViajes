@props(['nombre','destino','fecha','aerolinea','tipo_vuelo'])
<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="border-l-4 border-blue-500 pl-4">
        <h2 class="text-lg font-semibold mb-2">Vuelo {{$nombre}}</h2>
        <p class="text-gray-600 mt-1">Destino: {{$destino}} </p>
        <p class="text-gray-600 mt-1">Fecha de salida: {{$fecha}} </p>
        <p class="text-gray-600 mt-1">Aerolinea: {{$aerolinea}} </p>
        <p class="text-gray-600 mt-1">Tipo de vuelo: {{$tipo_vuelo}}</p>
    </div>
</div>