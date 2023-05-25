@props(['titulo','type','name'])
<div class="col-span-1">
    <p class="font-bold text-neutral-600">{{$titulo}}</p>
    <input type="{{$type}}" {{$attributes->merge(['class'=>'shadow-md text-neutral-700 w-full appearance-none bg-white border border-gray-500 rounded-md'])}} name="{{$name}}">
</div>