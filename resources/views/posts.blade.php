@extends('layouts.main')

@section('container')

<h1 class="text-4xl font-bold mb-10">Halaman Blog Posts</h1>

@foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post->slug  }}">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
        </a>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach

@endsection