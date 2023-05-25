<div class="container max-w-[7xl] mx-auto mt-4 mb-[150px]">
    @include('flatpickr::components.style')
    <h1 class="text-3xl font-bold mb-5 text-center text-black">Busca vuelos 🔎</h1>
    <div class=" rounded-lg p-2 border-slate-300 ">
        <form action="{{route('mis_vuelos.store')}}" method="POST">
            @csrf
            <div class="grid grid-cols-4 gap-4 mb-5 mx-auto mt-5">
                <div class="col-span-2">
                    <p class="font-bold text-neutral-600">Ingresa un destino destino</p>
                    <x-selectsearch :data="$data" id="flight_id" name="flight_id" />
                </div>
                <div class="col-span-2">
                    <p class="font-bold text-neutral-600">Selecciona una fecha</p>
                    <x-flatpickr range class="shadow-md text-neutral-700 w-full appearance-none bg-white border border-gray-500 rounded-md mb-2" name="fecha" required/>
                    <x-input-create titulo="Pasajeros" type="number" name="numAsiento" max="10" min="1" />
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class=" shadow-lg px-4 py-2 mt-4 text-white bg-blue-600 hover:bg-blue-500 rounded-md mb-4">Reservar</button>
            </div>
        </form>
    </div>
    @include('flatpickr::components.script')
</div>