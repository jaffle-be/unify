@extends('Unify::Unify')

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
    @stop

            <!-- CSS Customization -->

@section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Blog Full Width</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ route('store.home') }}">Home</a></li>
                <li><a href="">Blog</a></li>
                <li class="active">Blog Full Width</li>
            </ul>
        </div>
    </div>
@stop

@section('content')
    <div class="container content blog-full-width">

        <? $counter = 0 ?>

        @foreach($posts as $post)

                @include('Unify::blog.elements.large-overview-simple', ['post' => $post, 'counter' => $counter])

                <? $counter++ ?>

        @endforeach

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