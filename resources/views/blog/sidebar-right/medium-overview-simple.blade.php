@extends('Unify::Unify')

@section('title', Lang::get('Unify::blog.titles.overview'))

<link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@section('styles-content')
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-9 md-margin-bottom-40">

                <? $counter = 0 ?>
                <? $posts->loadImageSizes(340) ?>
                @foreach($posts as $post)

                    @include('Unify::blog.elements.medium-overview-simple', ['counter' => $counter])

                    <? $counter++?>

                @endforeach

                @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])


            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            @include('Unify::blog.elements.sidebars.medium-overview-simple')
                    <!-- End Right Sidebar -->
        </div>
        <!--/row-->
    </div><!--/container-->
@stop