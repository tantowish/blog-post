@extends('layouts.main')


@section('container')
<div class="px-16 py-16  lg:px-36">
    <h1 class="text-4xl font-bold mb-10">{{ $title }}</h1>

    @if ($posts->count())
    <div class="relative mb-10 text-center w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a class="absolute bg-opacity-50 rounded-tl-lg rounded-br-lg bg-slate-800 p-2 text-sm left-0 top-0 text-white lg:p-3 lg:text-base" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
        <a href="/posts/{{ $posts[0]->slug  }}">
            <div class="rounded-t-lg bg-cover" style="background-image: url('https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}'); background-repeat: no-repeat;">
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" />
              </div>
        </a>
        <div class="p-5">
            <a href="/posts/{{ $posts[0]->slug  }}">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}</h5>
            </a>
            <p class="text-sm mb-3 lg:mb-5">By. 
                <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name}}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </p> 
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
            
            <a class="btn" href="/posts/{{ $posts[0]->slug  }}">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
            
        </div>
    </div> 
    @else
    <p class="text-center text-xl">No post found</p>
    @endif



    <div class="lg:grid lg:grid-cols-3 gap-4">
        @foreach ($posts->skip(1) as $post)
            <div class="relative mb-5 text-center w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a class="absolute bg-opacity-50 rounded-tl-lg rounded-br-lg bg-slate-800 p-2 text-sm left-0 top-0 text-white lg:p-3 lg:text-base" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                <a href="/posts/{{ $posts[0]->slug  }}">
                    <img class="rounded-t-lg" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
                </a>
                <div class="p-5">
                    <a href="/posts/{{ $post->slug  }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    </a>
                    <p class="text-sm mb-3 lg:mb-5">By. 
                        <a href="/authors/{{ $post->author->username }}">{{ $post->author->name}}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </p> 
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post->excerpt, 150) }}</p>
                    
                    <a class="btn" href="/posts/{{ $post->slug  }}">
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button>
                    </a>      
                </div>
            </div> 
        @endforeach
    </div>

    

    @endsection
</div>