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

@section('content')
    <div class="container content">
        <div class="row blog-page blog-item">
            <div class="col-md-9 md-margin-bottom-60">
                @include('Unify::blog.details.simple')
            </div>

            @include('Unify::blog.sidebars.simple')
        </div>
        <!--/row-->
    </div><!--/container-->
@stop