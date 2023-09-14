
@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1 class="text-3xl font-bold">{{ $post["title"] }}</h1>
        <h3 class="text-xl font-semibold">{{ "By: " . $post["author"] }}</h3>
        <p>{{ $post["body"] }}</p>
    </article>
    
    <a href="/posts">Back to posts</a>
@endsection