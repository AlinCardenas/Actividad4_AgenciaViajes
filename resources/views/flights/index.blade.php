
<x-plantilla>
    
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Reservas</h1>
        <div class="flex justify-end mt-2">
            <a href="{{ route('vuelos.create') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4">Reservar Vuelo</a>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($flight as $fligh)
                <div class="col-span-1">
                    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="p-2 font-normal text-gray-700 dark:text-gray-400">
                            <p class="text-left">Numero de Reservacion: {{ $fligh->reservation_number }}</p>
                            <p class="text-left">Nombre: {{ $fligh->user->name }}</p>
                            <p class="text-left">Correo: {{ $fligh->user->email }}</p>
                            <p class="text-left">Origen: {{ $fligh->origin }}</p>
                            <p class="line-clamp-3">Destino: {{ $fligh->destination }}</p>
                            <p class="line-clamp-3">Ida: {{ $fligh->going_date }}</p>
                            <p class="line-clamp-3">Regreso: {{ $fligh->return_date }}</p>
                            <p class="line-clamp-3">Adultos: {{ $fligh->adults }}</p>
                            <p class="line-clamp-3">Menores: {{ $fligh->minors }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
</x-plantilla>