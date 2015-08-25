@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">

            @if($posts->count())

                <? $posts->loadImageSizes(1140) ?>
                @foreach($posts as $post)
                    @include('Unify::blog.elements.large-overview')
                @endforeach

                @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])
            @endif
        </div>

    </div>

@stop