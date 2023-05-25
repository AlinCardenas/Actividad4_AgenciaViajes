<div x-data="{ isOpen: false }">
    <button @click.prevent="isOpen = true" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Abrir Modal</button>

    <div x-show="isOpen" @keydown.escape.window="isOpen = false" class="fixed z-10 inset-0 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl p-6">
                <!-- Contenido del modal -->
                <h2 class="text-xl font-semibold mb-4">¿Esta seguro que desea agendar el vuelo?</h2>
                <div x-show="formData.flight_id || formData.fecha" class="mt-4">
                    <h3 class="text-lg font-semibold">Datos ingresados:</h3>
                    <p><span class="font-semibold">Nombre:</span> <span x-text="formData.flight_id"></span></p>
                    <p><span class="font-semibold">Email:</span> <span x-text="formData.fecha"></span></p>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="button" @click="isOpen = false" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded mr-2">Cancelar</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</div>
