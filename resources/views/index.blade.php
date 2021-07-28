@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="text-white text-5xl uppercase font-medium shadow-md pb-14 font-marker">
                    Do you want to become a backpacker?
                </h1>
                <h2 class="text-white text-5xl uppercase font-medium shadow-md pb-14 font-marker">Let's go with me!</h2>
                <a 
                    href="/blog" 
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-md hover:bg-gray-300 hover:underline">
                    Read more
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="sm:pb-0 pb-8">
            <img src="https://cdn.pixabay.com/photo/2016/01/09/18/27/camera-1130731_960_720.jpg" width="100%" alt="" class="rounded-md shadow-lg">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-bold text-gray-600">What we do?</h2>
            <p class="font-bold py-8 text-gray-500 leading-normal">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
            <p class="text-gray-600 text-sm pb-9 leading-normal">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <a 
                href="/blog" 
                class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl hover:bg-blue-600">
                Find us more
            </a>
        </div>
    </div>

    <div class="text-center p-10 bg-black text-white mb-20">
        <div class="font-bold block text-2xl py-2">Jobs fill your pockets, advantures fill your soul.</div>
        <q>Jaime Lyn Beauty</q>
    </div>

    <div class="text-center text-4xl pb-10">Recent post</div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto gap-5 items-center bg-yellow-700 rounded-2xl">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <?php
                    $posts = \App\Models\Post::orderBy('created_at', 'desc')->get();  
                ?>
                <span class="uppercase text-xl font-medium"> {{$posts[0]->title}} </span>
                <h3 class="leading-5 py-10">
                    {{ $posts[0]->description}}
                </h3>
                <a 
                    href="/blog/{{$posts[0]->slug}}"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-bold py-3 px-5 rounded-3xl hover:bg-black">
                    Read more
                </a>
            </div>
        </div>

        <div>
            <img src="{{asset('image/'. $posts[0]->image_path)}}" alt="" class="rounded-md shadow-lg">
        </div>
    </div>
@endsection