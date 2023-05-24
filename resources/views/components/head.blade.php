@props(['image','text'])

<div class="relative ">
    <img src="{{ asset($image) }}" class="w-screen h-screen">
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
        <div class="absolute top-1/8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="border-2 border-white p-1">
                <div class="border-2 border-white p-4">
                    <h1 class="text-4xl font-bold text-white text-center">{{$text}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>





