@extends('Unify::unify-clean')

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_error3_404.css') }}">
    @stop

    @section('content')
            <!--=== Error V3 ===-->
    <div class="container content">
        <!-- Error Block -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v3">
                    <h2>404</h2>

                    <p>{{ Lang::get('Unify::front.errors.error-happened') }}</p>

                    <p>{{ Lang::get('Unify::front.errors.url-not-found') }}</p>
                </div>
            </div>
        </div>
        <!-- End Error Block -->

        <!-- Begin Service Block V2 -->
        <div class="row service-block-v2">
            <div class="col-md-4">
                <div class="service-block-in service-or">
                    <div class="service-bg"></div>
                    <i class="icon-bulb"></i>
                    <h4>{{ Lang::get('Unify::front.errors.looking-for-title') }}</h4>

                    <p>{{ Lang::get('Unify::front.errors.looking-for-text') }}</p>
                    <p class="service-block-buttons">
                        <a class="btn-u btn-brd btn-u-light" href="/blog">{{ Lang::get('Unify::front.errors.looking-for-button') }}</a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-block-in service-or">
                    <div class="service-bg"></div>
                    <i class="icon-directions"></i>
                    <h4>{{ Lang::get('Unify::front.errors.back-home-title') }}</h4>

                    <p>{{ Lang::get('Unify::front.errors.back-home-text') }}</p>
                    <p class="service-block-buttons">
                        <a class="btn-u btn-brd btn-u-light" href="/">{{ Lang::get('Unify::front.errors.back-home-button') }}</a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-block-in service-or">
                    <div class="service-bg"></div>
                    <i class="icon-users"></i>
                    <h4>{{ Lang::get('Unify::front.errors.contact-title') }}</h4>

                    <p>{{ Lang::get('Unify::front.errors.contact-text') }}</p>
                    <p class="service-block-buttons">
                        <a class="btn-u btn-brd btn-u-light" href="/contact">{{ Lang::get('Unify::front.errors.contact-button') }}</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Service Block V2 -->
    </div>
    <!--=== End Error-V3 ===-->

    <!--=== Sticky Footer ===-->
    <div class="container sticky-footer">
        <p class="copyright-space">
            @copyright
        </p>
    </div>
    <!--=== End Sticky-Footer ===-->

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

        $.backstretch([
            "{{ theme_asset('img/blur/img1.jpg') }}"
        ])
    </script>
    <!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <![endif]-->
@stop
