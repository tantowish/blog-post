
@extends('layouts.main')

@section('container')
    
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $path }}" class="w-32 h-32 rounded-full" alt="">

@endsection
