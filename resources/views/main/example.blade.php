<x-app-layout>
    <!-- login.blade.php -->
    <form method="POST" action="{{ route('auth.login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>

</x-app-layout>