@extends('Unify::Unify')

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
            @include('Unify::blog.elements.news-3', ['post' => $post])
        @endforeach

        @include('Unify::blog.elements.paginators.paginator-3', ['pager' => $posts])

    </div>

@stop