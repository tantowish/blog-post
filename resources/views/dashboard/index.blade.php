@extends('dashboard.layouts.main')

@section('container')
    <div class="">
        <h1 class="text-2xl font-semibold mb-3 lg:text-3xl lg:mb-5">Welcome, {{ auth()->user()->name }}</h1>
        <hr>
    </div>

@endsection