@extends('Unify::unify-clean')

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_404_error1.css') }}">
@stop

@section('content')

            <!--Error Block-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="error-v2">
                <span class="error-v2-title">404</span>
                <span>That’s an error!</span>

                <p>The requested URL was not found on this server. <br> That’s all we know.</p>
            </div>
        </div>
    </div>
    <!--End Error Block-->
    <!--/container-->
    <!--=== End Content Part ===-->

@stop

@section('scripts-plugins')
    <script type="text/javascript" src="{{ theme_asset('plugins/backstretch/jquery.backstretch.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
    <script type="text/javascript">
        $.backstretch([
            "{{ theme_asset('img/bg/2.jpg') }}",
            "{{ theme_asset('img/bg/8.jpg') }}",
        ], {
            fade: 1000,
            duration: 7000
        });
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src ="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->
@stop