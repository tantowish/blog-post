
@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        <p>By. Sandhika Galih in <a href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}</p>
            </a> 
        {!! $post->body !!}
    </article>
    
    <a href="/posts">Back to posts</a>
@endsection