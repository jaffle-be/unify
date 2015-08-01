@extends('Unify::Unify')

<link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@section('styles-content')
@stop

@section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Blog Medium</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ route('store.home') }}">Home</a></li>
                <li><a href="">Features</a></li>
                <li class="active">Blog Medium</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
@stop

@section('content')
    <div class="container content">
        <div class="row blog-page">
            <!-- Left Sidebar -->
            <div class="col-md-9 md-margin-bottom-40">

                <? $counter = 0 ?>
                @foreach($posts as $post)

                @include('Unify::blog.elements.medium-overview-simple', ['counter' => $counter])

                <? $counter++?>

                @endforeach

                        <!--Pagination-->
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!--End Pagination-->


            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
            @include('Unify::blog.elements.sidebars.medium-overview-simple')
                    <!-- End Right Sidebar -->
        </div>
        <!--/row-->
    </div><!--/container-->
@stop