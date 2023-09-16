@extends('layouts.main')

@section('container')

<h1 class="text-4xl font-bold mb-10">Post Categories</h1>

@foreach ($categories as $category)
    <article class="mb-5">
        <ul>
            <li>
                <a href="/categories/{{ $category->slug  }}">
                    <h1 class="text-3xl font-bold">{{ $category->name }}</h1>
            </li>
        </ul>
    </article>
@endforeach

@endsection