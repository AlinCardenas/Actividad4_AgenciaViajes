
<section class="ji gp uq ml-5">
    {{--! Destinos --}}
    <x-title-section title="Top destinos más buscados en México" contenido="Escoge el mejor vuelo para tu próxima aventura"/>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            @foreach ($destinos as $item)
                @php
                    $contenedor = json_decode($item['images']);
                    $ruta = str_replace('public/images/', '', $contenedor[0]);
                @endphp
                <x-card-main :ruta="$ruta" :title="$item['name']" :country="$item['addresses']['country']" class="max-w-xs transition duration-300 ease-in-out hover:scale-110"/>
            @endforeach
        </div>
    </div>

    {{--! Vuelos --}}
    <x-title-section title="Los vuelos a mejor precio" contenido="La aventura de espera, no pierdas más tiempo" class="mt-[100px]"/>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            @foreach ($vuelos as $item)
                @php
                    $contenedor2 = json_decode($item['airline__destinations']['destinations']['images']);
                    $ruta2 = str_replace('public/images/', '', $contenedor2[0]);
                @endphp
                <x-card-main-vuelo :ruta="$ruta2" :precio="$item['price']" :destino="$item['airline__destinations']['destinations']['name']" :aerolinea="$item['airline__destinations']['airlines']['name']" :origen="$item['airline__destinations']['airports']['addresses']['country']" />
            @endforeach
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

