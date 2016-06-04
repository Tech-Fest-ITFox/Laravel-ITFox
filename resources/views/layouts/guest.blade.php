<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}"> <!-- custom styles -->
    <link rel="stylesheet" href="{{ asset('src/libs/ripple/jquery.materialripple.css') }}">
    <link rel="stylesheet" href="{{ asset('src/fonts/roboto/stylesheet.css') }}"> <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('src/fonts/roboto-slab/stylesheet.css') }}"> <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('src/fonts/icons/stroke.css') }}"> <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('src/fonts/categories/css/categories.css') }}"> <!-- fonts -->

</head>
<body id="landing">
<header>
    <a class="logo">ITFox</a>
</header>
<div class="landing-content">
    @yield('content')
    @include('includes.footer')
</div>


<!-- CUSTOM JS -->
<script src="{{ asset('src/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('src/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('src/libs/ripple/jquery.materialripple.js') }}"></script>
<script src="{{ asset('src/libs/crspline/jquery.crspline.js') }}"></script>
<script src="{{ asset('src/js/script.js') }}"></script>
</body>
</html>
