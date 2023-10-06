<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toshka Blog | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-b18c3673.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body class="overflow-x-hidden text-slate-900">
    @include('partials.navbar')

    @yield('container')

    <div>
        @include('partials.footer')
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

      <script  src="{{ asset('build/assets/app-6e327e9b.js') }}"></script>
</body>
</html>