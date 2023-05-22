@props([
    'route' => '',
    'icon' => '',
    'name' => '',
])
<li class="border-r-4 border-transparent hover:bg-gray-light">
    <a href="{{ $route }}" class="flex items-center text-black font-semibold py-5 px-6 ">
        <i class="{{ $icon }}"></i>
        {{$name}}
    </a>
</li>