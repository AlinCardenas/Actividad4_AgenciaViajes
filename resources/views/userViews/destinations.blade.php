<x-app-layout title="Destinos">

    <x-head image="images/playa.jpg" text="Descubre los mejores destinos" />
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-center mt-10">Encuentra tu destino ideal</h2>
    </div>
    <div class="w-full mb-8">
        <div class="flex flex-row flex-wrap justify-center gap-8">
            @foreach ($registers as $item)
            @php
                $ruta = json_decode($item->airline__destinations->destinations->images);
                $ruta_img = str_replace('public/images/', '', $ruta[0]);
            @endphp
            <x-cards-body>
                <x-slot name="title">{{$item->airline__destinations->destinations->name}}</x-slot>
                <x-slot name="content">{{$item->airline__destinations->airports->addresses->state}}</x-slot>
                <x-slot name="price">{{$item->price}}</x-slot>
                <x-slot name="image">{{$ruta_img}}</x-slot>
            </x-cards-body>
            @endforeach
        </div>
    </div>
    {{ $registers->links() }}
</x-app-layo>