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
<body>


@include('includes.sidebar')

@include('includes.header')
<!--       CONTENT       -->
<div class="content">
@yield('content')
</div>

<!--       DIALOGS      -->
<div class="dialogs-holder">
    <div class="dialog ">
        <div class="dialog-header clearfix">
            <a class="flaticon stroke maximize-4" href="/"></a>
            <div class="dialog-title"><span class="gray-bckg">Регистрация</span></div>
            <div class="flaticon stroke x-1"></div>
        </div>
        <div class="dialog-content clearfix">
            @include('includes.modals.register')
        </div>
    </div>
</div>

<!-- CUSTOM JS -->
<script src="{{ asset('src/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('src/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('src/libs/ripple/jquery.materialripple.js') }}"></script>
<script src="{{ asset('src/libs/crspline/jquery.crspline.js') }}"></script>
<script src="{{ asset('src/js/script.js') }}"></script>
</body>
</html>
