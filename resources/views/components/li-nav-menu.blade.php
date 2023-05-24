@props([
    'route' => '',
    'icon' => '',
    'name' => '',
])
<li class="border-r-4 border-transparent hover:bg-aux0 hover:text-aux">
    <a href="{{ $route }}" class="flex items-center text-black hover:text-aux text-2xl font-semibold py-5 px-6 max-w-xs transition duration-300 ease-in-out hover:scale-110">
        <i class="{{ $icon }}"></i>
        {{$name}}
    </a>
</li>