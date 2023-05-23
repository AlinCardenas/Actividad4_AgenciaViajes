<x-app-layout>
    <div class="">
        <x-nav-menu userimg="https://i.pinimg.com/originals/f5/ef/c7/f5efc7bbad1b8f9a5cfdd29be1ccc385.jpg" username="Daniel Delgado">
            <x-li-nav-menu name="Inicio" icon="fa-solid fa-robot mr-2" route="/" />
            <x-li-nav-menu name="Inicio" icon="fa-solid fa-robot mr-2" route="/" />
            <x-li-nav-menu name="Inicio" icon="fa-solid fa-robot mr-2" route="/" />
        </x-nav-menu>
    </div>

    <div class="ml-[255px]">
        <div class="flex flex-col w-full bg-tertiary ">
            {{--* Imagen de arriba --}}
            <div class="relative">
                <img src="https://i.postimg.cc/ZYwD02XS/portada-min.jpg" alt="" class="h-[450px] w-full shadow-2xl" />
                <div class="absolute right-0 h-full w-[350px] top-1/2 -translate-y-1/2  text-white bg-white" style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 12% 100%, 6% 86%, 3% 72%, 2% 56%, 3% 38%, 4% 27%, 6% 15%); ">
                    <div class="flex flex-col justify-center h-full items-center transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">
                        <p class=" text-center text-4xl text-aux">Destino</p>
                        <hr class="border-1 border-gray-dark w-5/12 mb-4 mt-2">
                        <p class="text-primary font-semibold text-center text-2xl">Precio: $328.23</p>
                    </div>
                </div>
            </div>          
            {{--* Cuerpo y card perfil --}}
            <div class="mx-[100px]">
                @include('partials.body')
                <x-card-user-opc/>
            </div>
            {{--* Footer --}}
            <div class="">
                @include('partials.footer')
            </div>
        </div>
    </div>
</x-app-layout>