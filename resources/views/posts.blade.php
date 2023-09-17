@extends('layouts.main')

@section('container')

<h1 class="text-4xl font-bold mb-10">{{ $title }}</h1>

@foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post->slug  }}">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        </a>
        <p>By. 
            <a href="/authors/{{ $post->author->username }}">{{ $post->author->name}}</a>
            in 
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> 
        </p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug  }}">Read More..</a>
        <hr>
    </article>
@endforeach

@endsection