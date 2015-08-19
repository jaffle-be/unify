@extends('Unify::unify')

@section('title', Lang::get('Unify::blog.titles.detail'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page blog-item">
            @include('Unify::blog.elements.large-detail-simple-with-sidebar')

            @include('Unify::blog.elements.sidebars.large-overview-simple')
        </div>
        <!--/row-->
    </div><!--/container-->
@stop