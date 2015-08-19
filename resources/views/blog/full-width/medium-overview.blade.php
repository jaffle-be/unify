@extends('Unify::unify')

@section('title', Lang::get('Unify::blog.titles.overview'))

@section('content')
    <div class="container content-md">

        @if($posts->count())

            <? $posts->loadImageSizes(460) ?>
            @foreach($posts as $post)
                @include('Unify::blog.elements.news-3', ['post' => $post])
            @endforeach

        @endif

        @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])

    </div>

@stop