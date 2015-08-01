@extends('Unify::Unify')

@section('styles-content')
    <link href="{{ theme_asset('css/pages/blog_masonry_3col.min.css') }}" rel="stylesheet">
@stop

@section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Masonry 3 Columns</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ route('store.home') }}">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
@stop

@section('content')
    <div class="blog_masonry_3col">

        <div class="container content grid-boxes">

            <? $counter = 0 ?>
            @foreach($posts as $post)

                @include('Unify::blog.elements.masonry')

                <? $counter++ ?>
            @endforeach

        </div>
        <!--/container-->

        <!--Pagination-->
        <div class="text-center">
            <ul class="pagination">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
        <!--End Pagination-->

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
