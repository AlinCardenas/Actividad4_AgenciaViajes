<div class="grid w-full place-content-center ">
    <div x-data="imageSlider()" x-init="init()"
        class="relative mx-auto max-w-2xl overflow-hidden rounded-md bg-gray-900 p-1">
        <button @click="previous()"
            class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
            <svg class="h-8 w-8 font-extrabold text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button @click="forward()"
            class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center">
            <svg class="h-8 w-8 font-extrabold text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        <img :src="currentImage()" class="rounded-sm blur-sm">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <div class="carousel-caption">
                <p x-text="currentCaption()[0]" class="text-center text-4xl text-white font-bold"></p>
                <hr
                    class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-50 to-transparent opacity-25 dark:opacity-100" />
                <p x-text="currentCaption()[1]" class="text-center text-2xl text-white font-bold mt-4""></p>
            </div>
        </div>
      </div>
</div>