<x-app-layout>
            <div class="flex-1 ">
                

<form action="{{ route('paymentstore') }}" method="POST">
    @csrf

    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name">

    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" id="email">

    <label for="phone">Teléfono:</label>
    <input type="text" name="phone" id="phone">

    <label for="street">Calle:</label>
    <input type="text" name="street" id="street">

    <label for="postal_code">Código Postal:</label>
    <input type="text" name="postal_code" id="postal_code">

    <label for="country">País:</label>
    <input type="text" name="country" id="country">

    <label for="name_product">Nombre del producto:</label>
    <input type="text" name="name_product" id="name_product">

    <label for="unit_price">Precio unitario:</label>
    <input type="text" name="unit_price" id="unit_price">

    <label for="quantity">Cnatidad:</label>
    <input type="text" name="quantity" id="quantity">

    <button type="submit">Crear Pedido</button>
</form>

            </div>
</x-app-layout>