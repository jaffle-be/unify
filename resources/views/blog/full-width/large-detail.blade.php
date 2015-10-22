@extends('Unify::unify')

@section('title', $post->title)

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/prism/prism.css') }}">
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <!-- News v3 -->
            <div class="news-v3 margin-bottom-30">
                <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="{{ $post->images->first()->title }}">

                <div class="news-v3-in">
                    <ul class="list-inline posted-info">
                        <li>By <a href="{{ store_route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                        <li>In {!!  $post->tags->format(null, ', ') !!}</li>
                        <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
                    </ul>

                    {!!  $post->present()->content !!}

                </div>
            </div>
            <!-- End News v3 -->
            <hr>

            <!-- Blog Post Author -->
            @include('Unify::blog.elements.author')
            <!-- End Blog Post Author -->

            <hr>

            <!-- Authored Blog -->
            @include('Unify::blog.elements.author-articles', ['posts' => $related])
            <!-- End Authored Blog -->

            {{--<hr>--}}

            {{--@include('Unify::blog.elements.comments')--}}
        </div>
        <!--/end container-->
    </div>
@stop

@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561b7a06755cdd66" async="async"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/forms/login.js') }}"></script>
    <script src="{{ theme_asset('plugins/prism/prism.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            LoginForm.initLoginForm();
        });
    </script>

@stop