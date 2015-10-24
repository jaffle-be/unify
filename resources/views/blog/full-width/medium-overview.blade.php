@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="container content-md">

        @if($posts->count())

            <? $posts->loadImageSizes(460) ?>
            <? $counter = 0 ?>
            @foreach($posts as $post)
                @include('Unify::blog.overviews.medium', ['post' => $post, 'counter' => $counter])
                <? $counter++ ?>
            @endforeach

        @endif

        @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])

    </div>

@stop