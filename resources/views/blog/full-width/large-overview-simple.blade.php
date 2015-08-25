@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="container content blog-full-width">

        @if($posts->count())
            <? $counter = 0 ?>
            <? $posts->loadImageSizes(1140) ?>
            @foreach($posts as $post)

                @include('Unify::blog.elements.large-overview-simple', ['post' => $post, 'counter' => $counter])

                <? $counter++ ?>

            @endforeach

            @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])

        @endif
    </div>
@stop