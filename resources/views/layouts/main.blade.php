<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toshka Blog | {{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-red-400">
    @include('partials.navbar')

    <div class="container px-16 py-16">
        @yield('container')
    </div>
</body>
</html>