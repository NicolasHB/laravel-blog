@props([
    'url_img',
    'title',
    'title2',
])

<div class="flex">
    <img class="w-80" src="img/{{$url_img}}" alt="">
    <div class=" pl-10 pt-5">
        <p>{{$title}}</p>
        <p>{{$title2}}</p>
    </div>
</div>