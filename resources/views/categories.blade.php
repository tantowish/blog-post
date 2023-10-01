@extends('layouts.main')

@section('container')

<h1 class="mt-10 text-center text-3xl font-bold mb-5 lg:mb-10 lg:text-4xl">Post Categories</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 px-8 my-10 mx-auto lg:px-36">
    @foreach ($categories as $category)
        <figure class="relative max-w-xl transition-all ease-in-out duration-500 cursor-pointer filter grayscale hover:grayscale-0 mb-5 group">
            <a href="/posts?category={{ $category->slug }}">
                <img class="rounded-lg" src="https://source.unsplash.com/512x512/?{{ $category->name }}" alt="{{ $category->name }}">
            </a>
            <figcaption class="absolute px-4 text-lg text-white bottom-6">
                <p class="text-xl transition duration-500 ease-in-out font-semibold lg:text-2xl group-hover:text-sky-600">{{ $category->name }}</p>
            </figcaption>
        </figure>
    @endforeach
</div>
@endsection