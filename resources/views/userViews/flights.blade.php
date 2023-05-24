<x-plantilla title="Vuelos">
    
    <x-head image="images/vuelos.jpg" text="Descubre los vuelos disponibles" />
    
    <div>
        <div>
            <h2 class="text-3xl font-bold text-center mt-10">Lista de vuelos</h2>
        </div>
    
        <div class="container max-w-[7xl] mx-auto mt-4">
            <div class="grid grid-cols-2 gap-4 mb-6 mx-auto mt-5">
                <x-card-vuelos nombre="México" destino="CDMX" fecha="24/06/2023" aerolinea="Vuela bonito" tipo_vuelo="Redondo" />
                <x-card-vuelos nombre="México" destino="CDMX" fecha="24/06/2023" aerolinea="Vuela bonito" tipo_vuelo="Redondo" />
                <x-card-vuelos nombre="México" destino="CDMX" fecha="24/06/2023" aerolinea="Vuela bonito" tipo_vuelo="Redondo" />
                <x-card-vuelos nombre="México" destino="CDMX" fecha="24/06/2023" aerolinea="Vuela bonito" tipo_vuelo="Redondo" />
            </div>
        </div>       
    </div>
</x-plantilla>