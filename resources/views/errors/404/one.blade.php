@extends('Unify::unify-clean')

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_404_error.css') }}">
@stop

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v1">
                    <span class="error-v1-title">404</span>
                    <span>{{ Lang::get('Unify::front.errors.error-happened') }}</span>

                    <p>{{ Lang::get('Unify::front.errors.url-not-found') }}</p>
                    <a class="btn-u btn-bordered" href="/">{{ Lang::get('Unify::front.errors.back-home-button') }}</a>
                </div>
            </div>
        </div>
    </div>
@stop