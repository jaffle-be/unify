@extends('Unify::unify')

@section('title', $post->title)

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/prism/prism.css') }}">
@stop

@section('scripts-app')
    @parent
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561b7a06755cdd66" async="async"></script>
    <script src="{{ theme_asset('plugins/prism/prism.js') }}"></script>
@stop

<body>

@section('content')
    <div class="container content blog-page blog-item">
        @include('Unify::blog.details.simple')
    </div>
@stop