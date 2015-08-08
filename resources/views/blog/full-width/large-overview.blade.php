@extends('Unify::Unify')

@section('title', Lang::get('blog.titles.overview'))

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">

            <? $posts->loadImageSizes(1140) ?>
            @foreach($posts as $post)
                @include('Unify::blog.elements.large-overview')
            @endforeach

            @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])
        </div>

    </div>

@stop