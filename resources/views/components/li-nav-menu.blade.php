@props([
    'route' => '',
    'icon' => '',
    'name' => '',
])
<li class="py-5 px-6 border-r-4 border-transparent hover:bg-blue-100 hover:border-blue-800 hover:text-blue-800 transition-all">
    <a href="{{ $route }}" class="flex items-center">
        <i class="{{ $icon }}"></i>
        {{$name}}
    </a>
</li>