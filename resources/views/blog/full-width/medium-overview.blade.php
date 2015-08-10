@extends('Unify::Unify')

@section('title', Lang::get('Unify::blog.titles.overview'))

@section('content')
    <div class="container content-md">

        <? $posts->loadImageSizes(460) ?>
        @foreach($posts as $post)
            @include('Unify::blog.elements.news-3', ['post' => $post])
        @endforeach

        @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])

    </div>

@stop