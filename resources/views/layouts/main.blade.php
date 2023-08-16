<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{route('first.index')}}">First</a></li>
        <li><a href="{{route('main.index')}}">Main</a></li>
        <li><a href="{{route('date.index')}}">Date</a></li>
        <li><a href="{{route('article.index')}}">Article</a></li>
        <li><a href="{{route('post.index')}}">Posts</a></li>
    </ul>
</nav>
<section class="header">

    @if (route('first.index') == 'http://localhost' . $_SERVER['REQUEST_URI'])
    <h1>This is first section</h1>
    @endif

    @yield('content')
</section>
</body>
</html>
