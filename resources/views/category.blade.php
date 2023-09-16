@extends('layouts.main')

@section('container')

<h1 class="text-4xl font-bold mb-10">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post->slug  }}">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
           
            </a>
        </a>
        <p>{{ $post->excerpt }}</p>
    </article>
@endforeach
@if ($posts->isEmpty())
    <h1 class="text-3xl font-bold">None</h1>
@endif

@endsection