<section class="ji gp uq ml-5">
    {{--! Destinos --}}
    <x-title-section title="Top destinos más buscados en México" contenido="Escoge el mejor vuelo para tu próxima aventura"/>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            <x-card-main ruta="{{asset('images/blog-01.jpg')}}" title="Cancún" country="México" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
            <x-card-main ruta="{{asset('images/blog-01.jpg')}}" title="Cancún" country="México" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
            <x-card-main ruta="{{asset('images/blog-01.jpg')}}" title="Cancún" country="México" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
            <x-card-main ruta="{{asset('images/blog-01.jpg')}}" title="Cancún" country="México" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
            <x-card-main ruta="{{asset('images/blog-01.jpg')}}" title="Cancún" country="México" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
        </div>
    </div>

    {{--! Vuelos --}}
    <x-title-section title="Los vuelos a mejor precio" contenido="La aventura de espera, no pierdas más tiempo" class="mt-[100px]"/>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro">
                <x-slot name="descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, culpa harum aperiam earum suscipit porro, qui maxime laborum quia blanditiis sit cum repellat sunt accusantium adipisci vel. Odio, totam natus.
                </x-slot>
            </x-card-main-vuelo>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro">
                <x-slot name="descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, culpa harum aperiam earum suscipit porro, qui maxime laborum quia blanditiis sit cum repellat sunt accusantium adipisci vel. Odio, totam natus.
                </x-slot>
            </x-card-main-vuelo>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro">
                <x-slot name="descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, culpa harum aperiam earum suscipit porro, qui maxime laborum quia blanditiis sit cum repellat sunt accusantium adipisci vel. Odio, totam natus.
                </x-slot>
            </x-card-main-vuelo>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro">
                <x-slot name="descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, culpa harum aperiam earum suscipit porro, qui maxime laborum quia blanditiis sit cum repellat sunt accusantium adipisci vel. Odio, totam natus.
                </x-slot>
            </x-card-main-vuelo>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro">
                <x-slot name="descripcion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, culpa harum aperiam earum suscipit porro, qui maxime laborum quia blanditiis sit cum repellat sunt accusantium adipisci vel. Odio, totam natus.
                </x-slot>
            </x-card-main-vuelo>
        </div>
    </div>

    {{--! Aerolineas --}}
    <x-title-section title="Nuestras aerolineas" contenido="El personal que hace posible tus sueños." class="mt-[150px]"/>
    <div class="flex justify-around mt-[50px]">
        <x-avatar ruta="https://tecdn.b-cdn.net/img/new/avatars/5.webp" nombre="Aeromexico" />
        <x-avatar ruta="https://tecdn.b-cdn.net/img/new/avatars/5.webp" nombre="Aeromexico" />
        <x-avatar ruta="https://tecdn.b-cdn.net/img/new/avatars/5.webp" nombre="Aeromexico" />
        <x-avatar ruta="https://tecdn.b-cdn.net/img/new/avatars/5.webp" nombre="Aeromexico" />
    </div>

    
    {{--! Suscripciones --}}
    <x-title-section title="¿Quieres recibir en tu correo las ultimas promociones?" contenido="¡SUSCRIBETE!" class="mt-[150px]"/>
    <div class="flex justify-center mt-[50px] items-center space-x-[100px]">
        <div class="">
            <label class="block">
                <span class="block text-sm font-medium text-slate-700">
                  Correo electrónico
                </span>
                <input type="email" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="tu@example.com" />
            </label>
        </div>
        <div class="">
            <a href="" class="bg-black py-2 px-3 rounded-lg text-white hover:bg-gray-dark">Sucribirse</a>
        </div>
    </div>
</section>

