@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
@stop

@section('styles-content')
@stop

@section('content')
    <div class="container content-md">
        <div class="row">
            <!-- Blog Sidebar -->
            @include('Unify::blog.elements.sidebars.medium-overview')
                    <!-- End Blog Sidebar -->

            <!-- Blog All Posts -->
            <div class="col-md-9">

                @if($posts->count())
                    <? $counter = 0 ?>
                    <? $posts->loadImageSizes(460) ?>
                    @foreach($posts as $post)

                        @include('Unify::blog.elements.medium-overview', ['counter' => $counter])

                        <? $counter++?>

                    @endforeach

                    @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])

                @endif

            </div>
            <!-- End Blog All Posts -->
        </div>
    </div>
@stop


@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            FancyBox.initFancybox();
        });
    </script>
@stop