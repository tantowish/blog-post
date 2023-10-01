@extends('dashboard.layouts.main')

@section('container')
<div class="mb-3 lg:mb-5">
    <h1 class="text-center text-2xl font-bold mb-3 lg:text-3xl lg:mb-5 text-slate-800">Create New Category</h1>
    <hr>
</div>
<form class="max-w-3xl" method="post" action="/dashboard/categories"">
    @csrf
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
        <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required value='{{ old('name') }}'>
        @error('name')
            <div class="text-xs text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-6">
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
        <input type="text" id="slug" name="slug" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"required value='{{ old('slug') }}'>
        @error('slug')
            <div class="text-xs text-red-600">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-3.5 py-2.5 text-center mr-2 mb-2">Create Category</button>
</form>


<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug')

    name.addEventListener('change', function(){
        const inputValue = name.value.trim(); // Trim any leading or trailing spaces

    if (inputValue === "") {
        // If the name is blank, you may choose to handle this differently, e.g., set a default value for the slug.
        // For now, let's assume you want to set the slug to an empty string when name is blank.
        slug.value = "";
        } 
    else {
        // If name is not blank, make the fetch request and update the slug based on the response.
        fetch('/dashboard/categories/checkSlug?name=' + inputValue)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    }
    })
</script>
@endsection
