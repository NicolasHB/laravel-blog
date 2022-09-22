@extends('layout.layout')

@section('content')
    @include('partials.homepage._hero')
    {{-- @include('partials.homepage._home') --}}
    {{-- Card 1 --}}
    <div class="bg-slate-200 pt-5 pb-5">
        <x-card 
            title="title heading"
            info="Title description,"
            date="May 2, 2016"
            url_img="girl_hat.jpeg"
            description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, magni aliquam 
                            eum reprehenderit unde incidunt sunt ut, tempora ex corporis nemo! Animi odio 
                            dolorum nemo. Ea rerum perspiciatis id sed!"
            btn="like"
            btn_2="Replies" >
            <hr class="pb-3">
            <img class="w-60" src="img/avatar_smoke.jpeg" alt="">
            <p>George <span class="text-slate-400">May 3, 2015, 6:32 PM</span></p>
            <p>Great blog post! Following</p>
            
        </x-card>
    </div>
    {{-- Card 2 --}}
    <div class="pt-5 pb-5 bg-slate-200">
        <x-card 
        title="title heading"
        info="title description,"
        date="April 23, 2016"
        url_img="man_hat.jpeg"
        description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, magni aliquam 
                            eum reprehenderit unde incidunt sunt ut, tempora ex corporis nemo! Animi odio 
                            dolorum nemo. Ea rerum perspiciatis id sed!"
        btn="like"
        btn_2="Replies"
        />
    </div>
    {{-- Card 3 --}}
    <div class="pt-5 pb-5 bg-slate-200">
        <x-card 
        title="title heading"
        info="title description,"
        date="April 7, 2016"
        url_img="runway.jpeg"
        description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa, magni aliquam 
                            eum reprehenderit unde incidunt sunt ut, tempora ex corporis nemo! Animi odio 
                            dolorum nemo. Ea rerum perspiciatis id sed!"
        btn="like"
        btn_2="Replies"
        />
    </div>
    <div class="bg-slate-200 pt-5 pb-5">
    
    </div>
    <div class="">
        <x-title 
        title="Popular Post"
        > 
    </x-title>
    <div class="">
        <x-profile-Pop 
        url_img="avatar_smoke.jpeg"
        title="Denim"
        title2="Sed mattis nunc"
        ></x-profile-Pop>
    </div>
    </div>
@endsection
