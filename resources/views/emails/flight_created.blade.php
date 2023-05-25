<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Nuevo vuelo creado
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg"> {{-- Fondo del formulario --}}
                <div class="max-w-xl">
                    
                    <!-- Aqui ira siempre el formulario de la seccion que estas creando -->
                    <section>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            ¡Nuevo vuelo creado!
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            A continuación se muestran los detalles del vuelo:
                        </p>
                        <ul>
                            <li>Número de vuelo: {{ $reservation_number }}</li>
                            <li>Origen: {{ $origin }}</li>
                            <li>Destino: {{ $destination }}</li>
                            <li>Fecha de Salida: {{ $going_date }}</li>
                            <li>Fecha de Regreso: {{ $return_date }}</li>
                            <li>Total de Pasajeros: {{ $passengers }}</li>
                        </ul>
                    
                        <p>¡Gracias por utilizar nuestra aplicación!</p>  
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
