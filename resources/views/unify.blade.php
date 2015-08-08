<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="shortcut" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('css/front/main.min.css') }}">

    @section('styles-style')
        <link rel="stylesheet" href="{{theme_asset('css/styles.min.css') }}">
    @show

    {{--we preinclude the header and footer here so we can adjust the styles and scripts accordingly in the proper sections of the html--}}
    {{--if we didn't do this, styles would not be in the head section, thus slowing down the site.--}}
    @include('Unify::layout.headers.' . Theme::setting('header'))
    @include('Unify::layout.footers.' . Theme::setting('footer'))


    <!-- CSS Header and Footer -->
    {{--@yield('styles-header')--}}
    @yield('styles-content')
    {{--@yield('styles-footer')--}}

    <!-- CSS Implementing Plugins -->
    @section('styles-plugins')
        <link rel="stylesheet" href="{{theme_asset('plugins/line-icons/line-icons.css') }}">
        <link rel="stylesheet" href="{{theme_asset('plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">
        @show

</head>

<body class="header-fixed">

<div class="wrapper">

    @yield('header')

    @yield('slider')

    @section('breadcrumb')

        {!! Breadcrumbs::render() !!}

    @stop

    @yield('breadcrumb')

    @yield('content')

    @yield('footer')

</div>


<!-- JS Global Compulsory -->
<script src="{{ theme_asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ theme_asset('plugins/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ theme_asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
@section('scripts-plugins')
    <script src="{{theme_asset('plugins/back-to-top.js')}}"></script>
    <script src="{{theme_asset('plugins/smoothScroll.js')}}"></script>
    <script src="{{theme_asset('plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    @show

            <!-- JS Customization -->
    <script type="text/javascript" src="{{ theme_asset('js/custom.js') }}"></script>

    <!-- JS Page Level -->
@section('scripts-app')
    <script src="{{ theme_asset('js/app.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
        });
    </script>
    @show

<!--[if lt IE 9]>
    <script src="{{ theme_asset('plugins/respond.js') }}"></script>
    <script src="{{ theme_asset('plugins/html5shiv.js') }}"></script>
    <script src="{{ theme_asset('plugins/placeholder-IE-fixes.js') }}"></script>
    <script src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js') }}"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
    <![endif]-->
</body>
</html>