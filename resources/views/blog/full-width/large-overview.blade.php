@extends('Unify::Unify')

@section('breadcrumb')
    <div class="breadcrumbs-v1 text-center">
        <div class="container">
            <span>Blog Page</span>

            <h1>Basic Full Width</h1>
        </div>
    </div>

@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            @foreach($posts as $post)

                    @include('Unify::blog.elements.large-overview')

            @endforeach

                    <!-- Pager v2 -->
            <ul class="pager pager-v2 pager-md no-margin">
                <li class="previous"><a href="#">&larr; Older</a></li>
                <li class="page-amount">1 of 7</li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
            <!-- End Pager v2 -->
        </div>
    </div>

@stop