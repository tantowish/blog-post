@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{ $post["slug"] }}">
            <h1 class="text-3xl font-bold">{{ $post["title"] }}</h1>
        </a>
        <h3 class="text-xl font-semibold">{{ "By: " . $post["author"] }}</h3>
        <p>{{ $post["body"] }}</p>
    </article>
@endforeach

@endsection