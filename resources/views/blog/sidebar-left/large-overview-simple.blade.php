@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            @include('Unify::blog.sidebars.simple')
                    <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-9">

                @if($posts->count())

                    <? $counter = 0 ?>
                    <? $posts->loadImageSizes(1140) ?>

                    @foreach($posts as $post)

                        @include('Unify::blog.overview.large-simple', ['counter' => $counter])
                        <? $counter++ ?>
                    @endforeach


                    @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])
                @endif
            </div>
            <!-- End Right Sidebar -->
        </div>
        <!--/row-->
    </div><!--/container-->
@stop