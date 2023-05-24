<x-app-layout>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="grid  w-full place-content-center ">
        <div x-data="imageSlider" class="relative mx-auto max-w-2xl overflow-hidden rounded-md bg-gray-900 p-1">
            <button @click="previous()" 
                class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
                <svg class="h-8 w-8 font-extrabold text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button @click="forward()"
                class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
                <svg class="h-8 w-8 font-extrabold text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="relative h-80" style="width: 30rem">
                <template x-for="(image, index) in images">
                    <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" class="absolute top-0">
                        <img :src="image" alt="image" class="rounded-sm blur-sm" />
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <p class="text-center text-4xl text-white font-bold">Cancun</p>
                            <hr>
                            <p class="text-center text-2xl text-white font-bold mt-4">Precio $6261.00</p>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
    <script src="{{asset('js/slider.js')}}"></script>
</x-app-layout>