<div x-show="isVisible" class="bg-white rounded-lg shadow-md p-4 w-64 absolute bottom-0 left-64">
    <div class="mb-4">
        <div class="flex space-x-4 items-center">
            <div><img class="block mx-auto h-8 w-8 rounded-full sm:mx-0 sm:shrink-0"
                    src="https://i.pinimg.com/originals/f5/ef/c7/f5efc7bbad1b8f9a5cfdd29be1ccc385.jpg"
                    alt="Woman's Face" /></div>
            <div class="text-black font-bold">
                <p>Nombre persona</p>
                <p>cargo</p>
            </div>
        </div>
    </div>
    <div class="text-black">
        <a href="/profile">
            <i class="fa-regular fa-user mb-2"></i>
            <span>Perfil</span>
        </a>
        <br>
        <br>
        <a href="{{route('api.logout')}}">
            <i class="fa-solid fa-arrow-right-to-bracket mb-2"></i>
            <span>Cerrar sesión</span>
        </a>
    </div>
</div>
