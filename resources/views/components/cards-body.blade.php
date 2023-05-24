@props(['image','title','content', 'price'])
<div class="max-w-sm h-auto">
  <img class="w-full" src="{{ asset($image) }}" alt="">
  <h2 class="font-bold text-lg text-center" >{{$title}}</h2>
  <p class="font-medium text-sm">{{$content}} </p>
  <p class="font-bg text-green-500">${{$price}}</p>
</div>