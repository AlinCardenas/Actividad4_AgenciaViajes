@props(['image'=>'', 'title', 'content', 'price', 'logo'=>''])
    
  
  @php
      if ($logo!='') {
        $val = 'http://127.0.0.1:8000/storage/img/' . $logo;
      }else{
        $val = 'http://127.0.0.1:8000/storage/images/' . $image;
      }
  @endphp


<div class="w-52">
  <img class="w-full" src="{{$val}}" alt="">
  <h2 class="font-bold text-lg text-center" >{{$title}}</h2>
  <p class="font-medium text-sm">{{$content}} </p>
  <p class="font-bg text-green-500">Desde ${{$price}}</p>
</div>