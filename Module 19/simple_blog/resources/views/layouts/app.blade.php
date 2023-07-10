<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="{{ url('/blog-posts') }}">Home</a></li>
                <li><a href="{{ url('/blog-posts/create') }}">Add Blog</a></li>
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
