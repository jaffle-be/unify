@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/shortcode_timeline1.min.css') }}">
@stop

@section('content')
    <div class="container content">
        @if($posts->count())
        <ul class="timeline-v1">


            <? $counter = 0 ?>
            <? $posts->loadImageSizes(1140) ?>
            @foreach($posts as $post)

                @include('Unify::blog.elements.timeline')

                <? $counter++ ?>
            @endforeach

            <li class="clearfix" style="float: none;"></li>
        </ul>

        @endif
        @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])

    </div>
@stop
