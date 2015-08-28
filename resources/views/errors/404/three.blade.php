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

                    <p>Sorry, the page you were looking for could not be found!</p>
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
                    <h4>Not what you were looking for?</h4>

                    <p>If the page is not what you are looking for, try searching the page on the search page and find out new things.</p>
                    <a class="btn-u btn-brd btn-u-light" href="/blog"> Discover More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-block-in service-or">
                    <div class="service-bg"></div>
                    <i class="icon-directions"></i>
                    <h4>Possible cause of the problem</h4>

                    <p>The page you requested could not be found. However, the requested resource may be available again in the future.</p>
                    <a class="btn-u btn-brd btn-u-light" href="/"> Go back to Home Page</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-block-in service-or">
                    <div class="service-bg"></div>
                    <i class="icon-users"></i>
                    <h4>Contact us</h4>

                    <p>If you have a problem with the website, please contact us, our support team will help you to solve the problem.</p>
                    <a class="btn-u btn-brd btn-u-light" href="/contact"> Contact Us</a>
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
