@props([
'username' => '',
'userimg' => '',
])
<div class="flex" x-data="{ isVisible: true }">
    <div class="md:block bg-white text-gray-500 w-64">
        <ul class="py-0 h-screen">
            {{ $slot }}
        </ul>
    </div>
    <li class="py-5 px-6 border-r-4 border-transparent absolute bottom-0 w-64 text-black font-semibold">
        <p class="py-5">
            Mi perfil
        </p>
        <button @click="isVisible = !isVisible">
            <div class="flex space-x-4 items-center">
                <div><img class="block mx-auto h-8 w-8 rounded-full sm:mx-0 sm:shrink-0" src="{{$userimg}}"
                        alt="Woman's Face" /></div>
                <div>{{$username}}</div>
                <div><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </button>
    </li>
