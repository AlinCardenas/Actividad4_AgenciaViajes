<x-app-layout>
<main>
    <!-- ===== Hero Start ===== -->
    <section class="gj">
        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
            <div class="tc _o">
                <div class="jn/2">
                    <h1 class="fk vj zp or kk wm wb">BIT.
                    </h1>
                    <p class="fq">
                        Si buscas vuelos para tu próxima aventura, los encontrarás en BIT, ya sea para disfrutar de unas merecidas vacaciones, una escapada de fin de semana o para hacer ese importante viaje de negocios que estabas organizando.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Hero End ===== -->

    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Top destinos más buscados hoy en México`, sectionTitleText: `Escoge el mejor vuelo para tu próxima aventura` }">
            <div class="bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>

    {{--! Vuelos --}}
    <x-title-section title="Los vuelos a mejor precio" contenido="La aventura de espera, no pierdas más tiempo" class="mt-[100px]"/>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro" aerolinea="Volaris" origen="Toluca"/>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro" aerolinea="Volaris" origen="Toluca"/>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro" aerolinea="Volaris" origen="Toluca"/>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro" aerolinea="Volaris" origen="Toluca"/>
            <x-card-main-vuelo ruta="{{asset('images/blog-02.jpg')}}" precio="1200" destino="Guerro" aerolinea="Volaris" origen="Toluca"/>
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

    <!-- ===== CTA End ===== -->
</main>
</x-app-layout>