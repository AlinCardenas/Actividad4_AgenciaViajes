@props(['destino', 'origen', 'llegada', 'salida'])

<div class="flex border-l-blue-800 border-l-8 my-8 mx-8 p-2">
    <div class="mr-8 ml-2">
      <p class="text-xl mb-4">Destino: {{$destino}}</p>
      <p class="text-xl">Origen: {{$origen}}</p>
    </div>
    <div>
      <p class="text-xl mb-4">Fecha de salida: {{$salida}}</p>
      <p class="text-xl">Fecha de llegada: {{$llegada}}</p>
    </div>
</div>