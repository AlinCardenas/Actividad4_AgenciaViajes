@props(['data'])

<input type="text" id="searchInput" placeholder="Buscar..." class="shadow-md text-neutral-700 w-full appearance-none bg-white border border-neutral-400 rounded-md mb-8">
<select {{$attributes->merge(['class'=>'shadow-md text-neutral-700 w-full appearance-none bg-white border border-neutral-400 rounded-md'])}} required>
    @foreach($data as $item)
      <option value="{{$item->id}}"><span class="text-black font-semibold">Destino: </span> {{ $item->airline__destinations->destinations->name }} - <span class="text-black font-semibold">Desde: </span> {{$item->airline__destinations->airports->addresses->state}}</option>
    @endforeach
</select>

<script>
    // Obtener referencias a los elementos HTML
    const searchInput = document.getElementById('searchInput');
    const flight_id = document.getElementById('flight_id');
  
    // Escuchar el evento input en el campo de búsqueda
    searchInput.addEventListener('input', function() {
      const searchTerm = searchInput.value.toLowerCase();
      let firstMatchIndex = -1;
  
      // Recorrer las opciones del select y mostrar/ocultar según las coincidencias
      Array.from(flight_id.options).forEach(function(option, index) {
        const text = option.text.toLowerCase();
        const match = text.includes(searchTerm);
  
        option.style.display = match ? '' : 'none';
  
        if (match && firstMatchIndex === -1) {
          firstMatchIndex = index;
        }
      });
  
      // Seleccionar la primera opción coincidente
      if (firstMatchIndex !== -1) {
        flight_id.selectedIndex = firstMatchIndex;
      }
    });
</script>