@extends('Unify::Unify')

@section('title', Lang::get('Unify::blog.titles.overview'))

@section('styles-content')
    <link href="{{ theme_asset('css/pages/blog_masonry_3col.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="blog_masonry_3col">

        <div class="container content grid-boxes">

            <? $counter = 0 ?>
            <? $posts->loadImageSizes(360) ?>
            @foreach($posts as $post)

                @include('Unify::blog.elements.masonry')

                <? $counter++ ?>
            @endforeach

        </div>
        <!--/container-->
        <br>

        <div class="container">
            @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])
        </div>

    </div>
@stop


@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="{{ theme_asset('plugins/masonry/jquery.masonry.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/pages/blog-masonry.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
@stop
