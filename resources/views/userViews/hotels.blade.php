<x-app-layout title="Hoteles">
    
    <x-head image="images/hotel.jpg" text="Descubre los mejores hoteles" />
    
    <div>
        <div>
            <h2 class="text-2xl font-bold text-center mt-10">Encuentra el mejor hotel</h2>
        </div>
    
        <div class="flex justify-center">
            <div class="grid grid-cols-5 gap-6 p-4 mx-auto mt-5">
              @foreach ($registers as $item)
                @php
                    $ruta = str_replace('public/img/', '', $item->logo);
                @endphp
                <x-cards-body >
                  <x-slot name="title">{{$item->name}}</x-slot>
                  <x-slot name="price">{{$item->price}}</x-slot>
                  <x-slot name="content">{{$item->addresses->state}}</x-slot>
                  <x-slot name="logo">{{$ruta}}</x-slot>
                </x-cards-body>
              @endforeach
            </div>
          </div>
    </div>
    {{ $registers->links() }}
</x-app-layout>