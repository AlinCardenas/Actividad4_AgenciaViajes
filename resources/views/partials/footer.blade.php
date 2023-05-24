<footer class="bg-primary text-center text-white dark:bg-neutral-600 dark:text-neutral-200">
    <div class="container p-6">
        <div class="text-3xl font-semibold mb-8 text-black flex flex-row justify-center">
            <p class="mr-6">¡Feliz viaje!</p>
            <div class="animate-diagonal-left">✈️</div>
        </div>
        <div class="flex">
            @foreach ($contenedor as $item)
                @php
                    $ruta = str_replace('public/images/', '', $item);
                    $val = "http://127.0.0.1:8000/storage/images/" . $ruta;
                @endphp
                <div class="mr-4">
                    <img src="{{$val}}" class="w-30 h-14 rounded-md shadow-lg p-0 m-0" />
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-primary p-4 text-center text-black">
        © 2023 Copyright:
        <a href="#" class="text-black">Bit technologies</a>
    </div>
</footer>