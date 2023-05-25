<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg"> {{-- Fondo del formulario --}}
                <div class="max-w-xl">
                    
                    <!-- Aqui ira siempre el formulario de la seccion que estas creando -->
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Reserva tu vuelo
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                A continuación se muestran los detalles del vuelo:
                            </p>
                        </header>

                        <form method="POST" action="{{ route('vuelos.store') }}">
                            @csrf
                            <div>
                                <x-input-label for="origen" :value="__('Origen')" />
                                <x-text-input id="origen" name="origin" type="text" class="mt-1 block w-full"
                                    :value="old('origen')" required autofocus autocomplete="origen" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="destino" :value="__('Destino')" />
                                <x-text-input id="destino" name="destination" type="text" class="mt-1 block w-full"
                                    :value="old('destino')" required autofocus autocomplete="calle" />
                                <x-input-error class="mt-2" :messages="$errors->get('calle')" />
                            </div>
                            <div class="grid grid-cols-2 gap-2 mt-8">
                                <div>
                                    <x-input-label for="ida" :value="__('Ida')" />
                                    <x-text-input id="ida" name="going" type="date" class="mt-1 block w-full"
                                        :value="old('ida')" required autofocus autocomplete="ida" />
                                    <x-input-error class="mt-2" :messages="$errors->get('ida')" />
                                </div>
                                <div>
                                    <x-input-label for="regreso" :value="__('Regreso')" />
                                    <x-text-input id="regreso" name="returnDate" type="date" class="mt-1 block w-full"
                                        :value="old('regreso')" required autofocus autocomplete="regreso" />
                                    <x-input-error class="mt-2" :messages="$errors->get('regreso')" />
                                </div>
                                <div>
                                    <x-input-label for="adultos" :value="__('Adultos')" />
                                    <x-text-input id="adultos" name="adults" type="number" class="mt-1 block w-full"
                                        :value="old('adultos')" required autofocus autocomplete="adultos" />
                                    <x-input-error class="mt-2" :messages="$errors->get('adultos')" />
                                </div>
                                <div>
                                    <x-input-label for="menores" :value="__('Menores(2-17)')" />
                                    <x-text-input id="menores" name="minors" type="number" class="mt-1 block w-full"
                                        :value="old('menores')" required autofocus autocomplete="menores" />
                                    <x-input-error class="mt-2" :messages="$errors->get('menores')" />
                                </div>
                            <x-primary-button>{{ __('Reservar') }}</x-primary-button>
                            <div class="flex items-center gap-4">
                            </div>
                        </form>
                        @csrf
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
