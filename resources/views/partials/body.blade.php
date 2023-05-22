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


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Blog Item -->
                <div class=" sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="{{asset('images/blog-01.jpg')}}" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-man.svg')}}" alt="User" />
                                <p>Musharof Chy</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-calender.svg')}}" alt="Calender" />
                                <p>21 May, 2023</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">Vuelos a Querétaro</a>
                        </h4>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class=" sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="{{asset('images/blog-02.jpg')}}" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-man.svg')}}" alt="User" />
                                <p>Musharof Chy</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-calender.svg')}}"" alt="Calender" />
                                <p>21 May, 2023</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">Vuelos a Puebla</a>
                        </h4>
                    </div>
                </div>

                <!-- Blog Item -->
                <div class=" sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="{{asset('images/blog-03.jpg')}}" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-man.svg')}}" alt="User" />
                                <p>Musharof Chy</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{asset('images/icon-calender.svg')}}" alt="Calender" />
                                <p>21 May, 2023</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">Vuelos a Tijuana</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->



    <!-- ===== CTA Start ===== -->
    <section class="i pg gh ji" id="añadir">
        <!-- Bg Shape -->
        <img class="h p q" src="{{asset('images/shape-16.svg')}}" alt="Bg Shape" />

        <div class="bb ye i z-10 ki xn dr">
            <div class="tc uf sn tn un gg">
                <div class=" to/2">
                    <h2 class="fk vj zp pr lk ac">
                        Ofertas exclusivas en tu email
                    </h2>
                    <p class="lk">
                        Recibirás emails promocionales de BIT. Para más información consulta los Avisos de privacidad.
                    </p>
                </div>
                <div class="bf">
                    <form action="{{ route('suscripcion.store') }}" method="post">
                        @csrf
                        <input type="email" name="email" class="vc ek kk hh rg ol il cm gi hi"
                            placeholder="Ingresa el Correo Electronico" required>
                        <button type="submit" class="vc ek kk hh rg ol il cm gi hi">
                            Suscribirme
                        </button>
                    </form>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="lk" >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    @if (session('mensaje'))
                    <p class="lk" 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)" >
                        {{ session('mensaje') }}
                    </p>
                    @endif
                </div>
            </div>

        </div>
    </section>

    <!-- ===== CTA End ===== -->
</main>
