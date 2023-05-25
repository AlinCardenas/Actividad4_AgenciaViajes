<x-app-layout>
    <h2 class="font-semibold text-5xl text-black text-center my-8">
        Perfil de usuario
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl text-black text-xl font-semibold">
                    Nombre: {{Session::get('user')->name}}
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl text-black text-xl font-semibold">
                    Correo electrónico: {{Session::get('user')->email}}
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    <h3 class="font-semibold text-2xl text-black text-center my-8">Mis vuelos:</h3>
                    <div class="grid grid-cols-2">
                        @foreach ($misvuelos as $item)
                            <x-card-flight>
                                <x-slot name="destino">
                                    {{$item['flights']['airline__destinations']['destinations']['name']}}
                                </x-slot>
                                <x-slot name="origen">
                                    {{$item['flights']['airline__destinations']['airports']['addresses']['state']}}
                                </x-slot>
                                <x-slot name="llegada">{{$item['leave_date']}}</x-slot>
                                <x-slot name="salida">{{$item['arrive_date']}}</x-slot>
                            </x-card-flight>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
