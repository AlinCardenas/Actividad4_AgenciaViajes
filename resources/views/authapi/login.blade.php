<x-app-layout>
    <style>
        .fondo {
            background-image: url('https://cdn.pixabay.com/photo/2016/11/29/09/16/architecture-1868667_1280.jpg');
            background-size: cover; 
            background-position: center; 
        }   
    </style>
    <div class="flex flex-col h-screen items-center justify-center fondo">
        <h1 class="text-4xl text-white font-semibold mb-[60px] bg-black py-2 px-3 rounded-2xl">Iniciar sesión</h1>
        <form method="POST" action="{{ route('auth.login') }}" class="bg-black py-4 px-4 rounded-3xl">
            @csrf
            <div>
                <label for="email" class="block text-xl text-white text-center py-2 px-3 rounded-2xl">Correo electrónico:</label>
                <input type="email" id="email" name="email" required class="w-80 bg-white rounded-lg text-black">
            </div>
            <div class="my-8">
                <label for="password" class="block text-xl text-white text-center py-2 px-3 rounded-2xl">Contraseña:</label>
                <input type="password" id="password" name="password" class="w-full bg-white rounded-lg text-black" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="text-white font-bold text-xl mb-8">Iniciar sesión</button>
            </div>
        </form>
    </div>
</x-app-layout>