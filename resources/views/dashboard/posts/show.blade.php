@extends('dashboard.layouts.main')

@section('container')
    <div class="max-w-3xl mx-auto px-8 my-10">
        <div class="flex flex-wrap">
            <a href="/dashboard/posts">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-3.5 py-2.5 text-center mr-2 mb-2">⬅ Back to Dashboard</button>
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit">
                <button type="button" class="text-white bg-gradient-to-r from-emerald-500 via-emerald-600 to-emerald-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:focus:ring-emerald-800 font-medium rounded-lg text-sm px-3.5 py-2.5 text-center mr-2 mb-2 flex items-center justify-center">
                    <svg class="w-4 h-4 text-white mr-1" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    Edit
                </button>
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-3.5 py-2.5 text-center mr-2 mb-2 flex items-center" onclick="return confirm('Are you sure?')">
                    <svg class="w-4 h-4 text-white mr-1" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    Delete
                </button>
            </form> 
        </div>
        <div class="mb-10">
            <h1 class="text-3xl font-bold lg:text-4xl">{{ $post->title }}</h1>
            <p class="mb-5 text-sm lg:text-base lg:mb-10">By. 
                <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name}}</a>
                in 
                <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> 
            </p>
            <div class="rounded-t-lg object-cover bg-no-repeat">
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
            </div>            
            <article class="flex flex-col mt-5 text-justify tracking-wide leading-relaxed lg:mt-10 gap-2 lg:gap-3">
                {!! $post->body !!}
            </article>
        </div>
        
        
    </div>
@endsection