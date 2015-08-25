@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleOverview'))

<link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@section('styles-content')
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page">

            <!-- Left Sidebar -->
            @include('Unify::blog.elements.sidebars.medium-overview-simple')
                    <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            <div class="col-md-9 md-margin-bottom-40">

                @if($posts->count())

                <? $counter = 0 ?>
                <? $posts->loadImageSizes(460) ?>
                @foreach($posts as $post)

                    @include('Unify::blog.elements.medium-overview-simple', ['counter' => $counter])

                    <? $counter++?>

                @endforeach

                @include('Unify::layout.paginators.' . Theme::setting('layoutPagination'), ['pager' => $posts])

                @endif


            </div>
            <!-- End Right Sidebar -->

        </div>
        <!--/row-->
    </div><!--/container-->
@stop