@props(['ruta', 'title', 'country'])

<div class="relative">
    <img src="{{$ruta}}" alt="..." class="h-64 w-full rounded-3xl blur-sm" />
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col justify-center items-center">
        <p class=" text-4xl text-white font-semibold">{{$title}}</h1>
            <hr class="border-white border-1 w-full mb-4">
            <p class=" text-xl text-white font-semibold">->{{$country}}</h1>
    </div>
</div>