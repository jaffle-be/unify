@extends('theme.unify::unify')

@section('breadcrumb')
    <div class="breadcrumbs-v1">
        <div class="container">
            <span>Blog Page</span>

            <h1>Basic Medium Posts</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="container content-md">

        @foreach($posts as $post)
            @include('theme.unify::blog.elements.news-3', ['post' => $post])
        @endforeach

        @include('theme.unify::blog.elements.paginators.paginator-3', ['pager' => $posts])

    </div>

@stop