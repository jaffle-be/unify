@extends('Unify::Unify')

@section('title', Lang::get('Unify::blog.titles.overview'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/shortcode_timeline1.min.css') }}">
@stop

@section('content')
    <div class="container content">
        <ul class="timeline-v1">


            <? $counter = 0 ?>
            <? $posts->loadImageSizes(850) ?>
            @foreach($posts as $post)

                @include('Unify::blog.elements.timeline')

                <? $counter++ ?>
            @endforeach

            <li class="clearfix" style="float: none;"></li>
        </ul>

        @include('Unify::layout.paginators.' . Theme::setting('pagination'), ['pager' => $posts])

    </div>
@stop
