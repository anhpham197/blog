@extends('layouts.app')

@section('content')
    <div class="m-auto text-center">
        <div class="py-15 border-b border-gray-200 image-post uppercase">
            <h1 class="text-6xl">
                All posts
            </h1>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 text-center">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto sm:text-left text-center">
            <a href="/blog/create"
                class="bg-blue-500 hover:bg-blue-600 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="{{asset('image/'. $post->image_path)}}" alt="Image">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>

                <span class="text-gray-500 leading-5">
                    By <span class="font-semibold italic text-gray-800">{{ $post->user->name}}</span>, created on <span class="font-semibold">{{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                </span>

                <p class="text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>


                <div class="flex justify-between">
                    <div>
                        <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 hover:bg-blue-600 text-gray-100 text-base font-bold py-3 px-4 rounded-3xl">
                            Keep reading
                        </a>
                    </div>

                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <a 
                                    href="/blog/{{ $post->slug }}/edit"
                                    class="text-gray-700 italic hover:font-bold hover:underline">
                                    Edit
                                </a>
                            </div>
    
                            <div>
                                <form 
                                    action="/blog/{{ $post->slug }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-700 hover:font-bold hover:underline"                                         onclick="alert('Are you sure?')"
                                    onclick="confirm('Are you sure?')"> Delete </button>
                                </form>
                            </div>
                        </div>                  
                    @endif
                </div>           
            </div>
        </div>       
    @endforeach
@endsection