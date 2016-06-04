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
    <link rel="stylesheet" href="{{ asset('src/fonts/fontawesome/css/font-awesome.css') }}"> <!-- fonts -->

    <link href="{{ asset('src/libs/froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('src/libs/froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Include Code Mirror style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <!-- Include Editor Plugins style. -->
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/char_counter.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/code_view.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/colors.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/emoticons.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/file.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/fullscreen.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/image.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/image_manager.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/line_breaker.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/quick_insert.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/table.css') }}">
  <link rel="stylesheet" href="{{ asset('src/libs/froala/css/plugins/video.css') }}">
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
    <div class="dialog new_file">
        <div class="dialog-header clearfix">
            <a class="flaticon stroke maximize-4" href="/"></a>
            <div class="dialog-title"><span class="gray-bckg">Регистрация</span></div>
            <div class="flaticon stroke x-1"></div>
        </div>
        <div class="dialog-content clearfix">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            @include('includes.modals.new_file')
        </div>
    </div>
</div>

<!-- CUSTOM JS -->
<script src="{{ asset('src/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('src/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('src/libs/ripple/jquery.materialripple.js') }}"></script>
<script src="{{ asset('src/libs/crspline/jquery.crspline.js') }}"></script>
<script src="{{ asset('src/js/script.js') }}"></script>

<!-- Include JS files. -->
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/froala_editor.min.js') }}"></script>

  <!-- Include Code Mirror. -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <!-- Include Plugins. -->
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/align.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/char_counter.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/code_beautifier.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/code_view.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/colors.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/emoticons.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/entities.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/file.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/font_family.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/font_size.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/fullscreen.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/image.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/image_manager.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/inline_style.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/line_breaker.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/link.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/lists.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/paragraph_format.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/paragraph_style.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/quick_insert.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/quote.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/table.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/save.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/url.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('src/libs/froala/js/plugins/video.min.js') }}"></script>
</body>
</html>
