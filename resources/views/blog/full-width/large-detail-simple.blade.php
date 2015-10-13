@extends('Unify::unify')

@section('title', $post->title)

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/prism/prism.css') }}">
@stop

@section('scripts-app')
    @parent
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561b7a06755cdd66" async="async"></script>
    <script src="{{ theme_asset('plugins/prism/prism.js') }}"></script>
@stop

<body>

@section('content')
    <div class="container content blog-page blog-item">
        <!--Blog Post-->
        <div class="blog margin-bottom-40">
            <div class="blog-img">
                <img class="img-responsive" src="{{ asset($post->thumbnail(1140)) }}" alt="">
            </div>

            <div class="blog-post-tags">
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
                    <li><i class="fa fa-pencil"></i> <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                    {{--<li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>--}}
                    <li><i class="fa fa-tags"></i> {!!  $post->tags->format() !!}</li>
                </ul>
            </div>

            {!!  $post->present()->content !!}
        </div>
        <!--End Blog Post-->

        <hr>

        @include('Unify::blog.elements.author')

        <hr>

        @include('Unify::blog.elements.author-articles', ['posts' => $related])

        {{--<hr>--}}

        {{--@include('Unify::blog.elements.comments-simple')--}}
    </div>
@stop