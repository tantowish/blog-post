
@extends('layouts.main')

@section('container')
    <div class="max-w-3xl mx-auto px-8 my-10">
        <div class="mb-10">
            <h1 class="text-3xl font-bold lg:text-4xl">{{ $post->title }}</h1>
            <p class="mb-5 text-sm lg:text-base lg:mb-10">By. 
                <a href="/authors/{{ $post->author->username }}">{{ $post->author->name}}</a>
                in 
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> 
            </p>
            <div class="rounded-t-lg object-cover bg-no-repeat">
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" />
              </div>            
            <article class="flex flex-col mt-5 text-justify tracking-wide leading-relaxed lg:mt-10 gap-2 lg:gap-3">
                {!! $post->body !!}
            </article>
        </div>
        
        <a href="/posts"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">⬅️ Back to post</button></a>
    </div>
@endsection