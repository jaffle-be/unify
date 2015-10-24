@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))


@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">

            @if($posts->count())

                <? $posts->loadImageSizes(1140) ?>
            <? $counter = 0 ?>
                @foreach($posts as $post)
                    @include('Unify::blog.overview.large', ['counter' => $counter])
                    <? $counter++ ?>
                @endforeach

                @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])
            @endif
        </div>

    </div>

@stop