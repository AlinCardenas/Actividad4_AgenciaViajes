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
                <img src="https://fastly.picsum.photos/id/1/5000/3333.jpg?hmac=Asv2DU3rA_5D1xSe22xZK47WEAN0wjWeFOhzd13ujW4" alt="" class="h-[450px] w-full" />
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-5xl text-white">
                    <h1>everv</h1>
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