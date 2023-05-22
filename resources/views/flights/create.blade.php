<x-plantilla>
    <div class="container max-w-[7xl] mx-auto mt-4">

        <div class="shadow-md rounded-lg p-2 border-slate-300">
            <h1 class="text-3xl font-bold mb-5 text-neutral-800">Busca vuelos</h1>

            <div class="grid grid-cols-4 gap-4 mb-5 mx-auto mt-5">
                <div class="col-span-2">
                    <p class="font-bold text-neutral-600">Selecciona destino</p>
                    <select class="shadow-md w-full appearance-none border border-neutral-400 rounded-md  " name="">
                        <option value="">opc1</option>
                        <option value="">opc1</option>
                        <option value="">opc1</option>
                    </select>
                </div>
                 <div class="col-span-2">
                    <p>Selecciona una fecha</p>
                    <x-flatpickr class="shadow-md text-neutral-700 w-full appearance-none bg-white border border-neutral-400 rounded-md" range placeholder="66/66/66 a 77/77/55"/>
                 </div>
                
                <x-input-create titulo="Pasajeros" type="number" name="pasajeros" max="10" min="1" />
            </div>
            <button type="submit"  class=" shadow-lg px-4 py-2 mt-4 text-white bg-blue-600 hover:bg-blue-500 rounded-md mb-4">Reservar</button>
        </div>
        

    </div>
</x-plantilla>