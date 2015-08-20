@extends('Unify::unify')

@section('title', Theme::setting('blogMainTitleDetail'))

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
@stop

@section('styles-content')
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">

            @include('Unify::blog.elements.large-detail-with-sidebar')

                @include('Unify::blog.elements.sidebars.large-overview')
            </div>
        </div>
        <!--/end container-->
    </div>
@stop

<body>

@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/forms/login.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            FancyBox.initFancybox();
            LoginForm.initLoginForm();
        });
    </script>
@stop
