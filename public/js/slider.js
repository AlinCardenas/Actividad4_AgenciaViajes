    // Obtener referencias a los elementos HTML
    const searchInput = document.getElementById('searchInput');
    const mySelect = document.getElementById('mySelect');

    // Escuchar el evento input en el campo de búsqueda
    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();
        let firstMatchIndex = -1;

        // Recorrer las opciones del select y mostrar/ocultar según las coincidencias
        Array.from(mySelect.options).forEach(function (option, index) {
            const text = option.text.toLowerCase();
            const match = text.includes(searchTerm);

            option.style.display = match ? '' : 'none';

            if (match && firstMatchIndex === -1) {
                firstMatchIndex = index;
            }
        });

        // Seleccionar la primera opción coincidente
        if (firstMatchIndex !== -1) {
            mySelect.selectedIndex = firstMatchIndex;
        }
    });