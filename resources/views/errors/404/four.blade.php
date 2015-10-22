@extends('Unify::unify-clean')

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_error4_404.css') }}">
@stop

@section('content')
<!--=== Error V4 ===-->
<div class="container content">
    <!--Error Block-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="error-v4">
                <a href="#"><img src="{{ asset($account->logo()) }}" alt=""></a>
                <h1>404</h1>
                <span class="sorry">{{ Lang::get('Unify::front.errors.error-happened') }}</span>
                <span class="sorry">{{ Lang::get('Unify::front.errors.url-not-found') }}</span>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <a class="btn-u btn-brd btn-u-light" href="{{ store_route('store.home') }}"> {{ Lang::get('Unify::front.errors.back-home-button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/container-->
<!--End Error Block-->

<!--=== Sticky Footer ===-->
<div class="container sticky-footer">
    <p class="copyright-space">
        @copyright
    </p>
</div>
<!--=== End Sticky Footer ===-->

@stop
@section('scripts-plugins')
<script type="text/javascript" src="{{ theme_asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>
@stop
@section('scripts-app')
        <!-- JS Page Level -->
<script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<script type="text/javascript">
    $.backstretch([
        "{{ theme_asset('img/blur/img2.jpg') }}"
    ])
</script>
<!--[if lt IE 9]>
<script src="{{ theme_asset('plugins/respond.js') }}"></script>
<script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
<script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
<![endif]-->
@stop