@extends('layouts.main')


@section('container')
<div class="px-16 py-16  lg:px-36">
    <div class="flex  justify-between flex-wrap">
        <h1 class="w-full text-4xl font-bold mb-5 lg:w-1/2">
            {{ $title }}
        </h1>
        <div class="w-full mb-10 lg:w-1/3">
            <form action="/posts" method="get"> 
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="category" value="{{ request('author') }}">
                @endif
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search a post" value="{{ request('search') }}" required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2  text-center mr-2 mb-2">Search</button></a>
                    
                </div>
            </form>
        </div>    
    </div>
    
    @if ($posts->count())
    <div class="relative mb-10 text-center w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a class="absolute bg-opacity-50 rounded-tl-lg rounded-br-lg bg-slate-800 p-2 text-sm left-0 top-0 text-white lg:p-3 lg:text-base" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
        <a href="/posts/{{ $posts[0]->slug  }}">
            <div class="rounded-t-lg bg-cover" style="background-image: url('{{ asset('storage/'.$posts[0]->image) }}'); background-repeat: no-repeat;">
                <div class="rounded-t-lg bg-cover max-h-[300px] overflow-hidden flex items-center">
                    @if ($posts[0]->image)
                        <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" />
                    @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" />
                    @endif
                </div>                  </div>
        </a>
        <div class="p-5">
            <a href="/posts/{{ $posts[0]->slug  }}">
                <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->title }}</h5>
            </a>
            <p class="text-sm mb-3 lg:mb-5">By. 
                <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name}}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </p> 
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
            
            <a class="btn" href="/posts/{{ $posts[0]->slug  }}">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Read More</button></a>
            
        </div>
    </div> 


    <div class="lg:grid lg:grid-cols-3 gap-4">
        @foreach ($posts->skip(1) as $post)
            <div class="relative mb-5 text-center w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a class="absolute bg-opacity-50 rounded-tl-lg rounded-br-lg bg-slate-800 p-2 text-sm left-0 top-0 text-white lg:p-3 lg:text-base" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                <a href="/posts/{{ $posts[0]->slug  }}">
                    <div class="rounded-t-lg bg-cover bg-no-repeat max-h-[350px] overflow-hidden flex items-center">
                        @if ($post->image)
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" />
                        @else
                            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
                        @endif
                    </div>    
                </a>
                <div class="p-5">
                    <a href="/posts/{{ $post->slug  }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    </a>
                    <p class="text-sm mb-3 lg:mb-5">By. 
                        <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name}}</a>
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

    @else
    <p class="text-center text-xl">No post found</p>
    @endif

    <div>{{ $posts->links() }}</div>
    


    

    @endsection
</div>