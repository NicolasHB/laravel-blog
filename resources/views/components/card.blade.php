@props([
    'title', 
    'info', 
    'date',
    'url_img', 
    'description', 
    'btn', 
    'btn_2', 
])

<div class="carde">
    <h2 class="text-center font-bold text-xl">{{$title}}</h2>
    <p class="text-center pb-3">{{$info}}<span class="text-slate-400"> {{$date}}</span></p>
    <img src="img/{{$url_img}}" alt="">
    <p class="pt-3">
        {{$description}}      
    </p>
    <div class="space-x-48 pt-5">
        <button class="border-black "><i class="fa-solid fa-thumbs-up "></i>{{$btn}}</button>
        <button class=" bg-black text-white">{{$btn_2}}<i class="fa-light fa-square-1"></i></button>
    </div>
    <div class="pt-3">
        {{$slot}}
    </div>
</div>