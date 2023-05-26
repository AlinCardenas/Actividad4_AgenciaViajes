<x-app-layout>
    <div class="relative">
        <div class="relative">
            <img src="https://i.pinimg.com/originals/d2/e4/33/d2e433a119194661db9909a4162bcd36.gif" alt="GIF" class="blur w-screen h-screen">
        </div>

        <div class="absolute top-0 left-1/3 z-10">
            <div class="flex items-center justify-center h-screen">
                <div class="max-w-md mx-auto bg-white bg-opacity-50 rounded-xl shadow-md">
                    <div class="flex justify-center">
                        <img class="w-64 h-64 animate-bounce" src="https://upload.wikimedia.org/wikipedia/en/2/2d/SSU_Kirby_artwork.png" alt="Imagen">
                    </div>
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                    <!-- Name -->
                    <div class="pb-4 px-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="bg-white block mt-1 w-96 bg-opacity-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="" />
                    </div>

                    <!-- Email Address -->
                    <div class="pb-4 px-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-96" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="" />
                    </div>

                    <!-- Password -->
                    <div class="pb-4 px-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-96"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="pb-4 px-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-96 "
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="" />
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="pb-4 px-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    <div>
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>