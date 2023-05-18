<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-400">
        

            <!-- Page Content -->
            <main>
                <!-- menu lateral -->
            <div class="flex">
                <div class="md:block bg-white text-gray-500 w-64">
                    <ul class="py-4 h-screen">
                        <li class="py-5 px-6 border-r-4 border-transparent hover:bg-blue-100 hover:border-blue-800 hover:text-blue-800 transition-all">
                            <a href="/" class="flex items-center">
                                <i class="fa-solid fa-robot mr-2"></i>
                                    Item de la lista
                            </a>
                        </li>
                        <li class="py-5 px-6 border-r-4 border-transparent hover:bg-blue-100 hover:border-blue-800 hover:text-blue-800 transition-all">
                            <a href="/" class="flex items-center">
                                <i class="fa-solid fa-robot mr-2"></i>
                                    Item de la lista
                            </a>
                        </li>
                        <li class="py-5 px-6 border-r-4 border-transparent hover:bg-blue-100 hover:border-blue-800 hover:text-blue-800 transition-all">
                            <a href="/example" class="flex items-center">
                                <i class="fa-solid fa-robot mr-2"></i>
                                    Item de la lista
                            </a>
                        </li>

                        <li class="py-5 px-6 border-r-4 border-transparent absolute bottom-0 w-64 " >
                            <p class="text-slate-500 font-medium py-5">
                                Mi perfil
                            </p>
                            <a href="/">
                                <div class="flex space-x-4 items-center">
                                <div><img class="block mx-auto h-8 w-8 rounded-full sm:mx-0 sm:shrink-0" src="https://i.pinimg.com/originals/f5/ef/c7/f5efc7bbad1b8f9a5cfdd29be1ccc385.jpg" alt="Woman's Face" /></div>
                                <div>Nombre persona</div>
                                <div><i class="fa-solid fa-angle-right"></i></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1 ">
                    <div class="bg-white rounded-lg shadow-md p-4 w-64">
                        <div class="mb-4">
                            <div class="flex space-x-4 items-center">
                                <div ><img class="block mx-auto h-8 w-8 rounded-full sm:mx-0 sm:shrink-0" src="https://i.pinimg.com/originals/f5/ef/c7/f5efc7bbad1b8f9a5cfdd29be1ccc385.jpg" alt="Woman's Face" /></div>
                                <div>Nombre persona <p class="text-cyan-500"> pilin</p></div>
                            </div>
                        </div>
                        <div>
                            <a href="/profile">
                                <i class="fa-regular fa-user mb-2"></i>
                                <span class="text-gray-500 ">Perfil</span>
                            </a>
                            <br>
                            <a href="/profile">
                                <i class="fa-solid fa-gear mb-2"></i>
                                <span class="text-gray-500 ">Ajustes</span>
                            </a>
                            <br>
                            <a href="/profile">
                                <i class="fa-solid fa-arrow-right-to-bracket mb-2"></i>
                                <span class="text-gray-500 ">Log out</span>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            </main>
        <!-- fin del menu lateral -->
    </body>
</html>




    
