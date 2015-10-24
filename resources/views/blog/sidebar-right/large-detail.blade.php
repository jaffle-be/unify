@extends('Unify::unify')

@section('title', $post->title)

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <link rel="stylesheet" href="{{ theme_asset('plugins/prism/prism.css') }}">
@stop


@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/blog.min.css') }}">
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">

                <div class="col-md-9">
                    @include('Unify::blog.details.default')
                </div>

                @include('Unify::blog.elements.sidebars.large-overview')
            </div>
        </div>
        <!--/end container-->
    </div>
@stop

<body>

@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-561b7a06755cdd66" async="async"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/forms/login.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script src="{{ theme_asset('plugins/prism/prism.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            FancyBox.initFancybox();
            LoginForm.initLoginForm();
        });
    </script>
@stop
