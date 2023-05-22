<section class="i pg gh ji" id="añadir">
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
                        <li class="lk">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('mensaje'))
                <p class="lk" x-data="{ show: true }" x-show="show" x-transition
                    x-init="setTimeout(() => show = false, 2000)">
                    {{ session('mensaje') }}
                </p>
                @endif
            </div>
        </div>
    </div>
</section>