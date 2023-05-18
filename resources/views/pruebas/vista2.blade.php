<x-app-layout>
    <section>
        {{-- @dump($data['hdurl']) --}}
        @php
            $ruta = $data['hdurl'];
        @endphp
        @dump($ruta)
        <img src="{{$ruta}}" alt="" width="200" height="200">
    </section>
</x-app-layout>