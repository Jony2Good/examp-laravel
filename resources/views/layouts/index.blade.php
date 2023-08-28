<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite(['resources/js/app.js'])
    <title>@yield('page.title', config('app.name'))</title>
</head>
<body>
<header>
    <div class="container">
        @include('includes.posts_header')
    </div>
</header>
<main>
    <div class="container pt-3">
        @yield('content')
    </div>
</main>

<footer>
    <div class="container">
        @include('includes.footer')
    </div>
</footer>

</body>
</html>
