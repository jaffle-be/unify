@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog_magazine.min.css') }}">
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-9">

                @if($posts->count())
                <? $counter = 0 ?>

                <? $posts->loadImageSizes(1140) ?>

                @foreach($posts as $post)

                @include('Unify::blog.elements.large-overview-simple-with-sidebar', ['counter' => $counter])
                <? $counter++ ?>
                @endforeach


                @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])
                        <!--End Pagination-->
                @endif
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            @include('Unify::blog.elements.sidebars.large-overview-simple')
                    <!-- End Right Sidebar -->
        </div>
        <!--/row-->
    </div><!--/container-->
@stop