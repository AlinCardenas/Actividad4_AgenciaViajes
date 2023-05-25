<x-plantilla title="Vuelos">
    
    <x-head image="images/vuelos.jpg" text="Descubre los vuelos disponibles" />
    
    <div>
        <div>
            <h2 class="text-3xl font-bold text-center mt-10">Lista de vuelos</h2>
        </div>
    
        <div class="container max-w-[7xl] mx-auto mt-4">
            <div class="grid grid-cols-2 gap-4 mb-6 mx-auto mt-5">
                @foreach ($registers as $item)
                    <x-card-vuelos>
                        <x-slot name="pais">{{$item->airline__destinations->airports->addresses->country}}</x-slot>
                        <x-slot name="estado">{{$item->airline__destinations->airports->addresses->state}}</x-slot>
                        <x-slot name="destino">{{$item->airline__destinations->destinations->addresses->state}}</x-slot>
                        <x-slot name="fecha">{{$item->leave_date}}</x-slot>
                        <x-slot name="aerolinea">{{$item->airline__destinations->airlines->name}}</x-slot>
                        <x-slot name="precio">{{$item->price}}</x-slot>
                    </x-card-vuelos>
                @endforeach
            </div>
            {{ $registers->links() }}
        </div>       
    </div>
</x-plantilla>