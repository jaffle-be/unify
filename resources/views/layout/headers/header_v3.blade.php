@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-v3.css') }}">
@stop

@section('header')

    <div class="header-v3">
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">{{ Lang::get('Unify::front.toggle-navigation') }}</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="{{ store_route('store.home') }}" id="organisation-url" itemprop="url">
                        <img id="logo-header" src="{{ asset($account->logo()) }}" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                    <div class="container">
                        <ul class="nav navbar-nav">

                            @include('Unify::layout.headers.primary-menu')


                            @if($account->locales->count() > 1)

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ app()->getLocale() }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($account->locales as $locale)
                                            @if($locale->slug == app()->getLocale())
                                                <li class="active"><a href="#">{{ $locale->name }}</a></li>
                                            @else
                                                <li>
                                                    <a href="{{ route('store.locale', ['locale' => $locale->slug]) }}">{{ $locale->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>

                                @endif

                                        <!-- Search Block -->
                                <li>
                                    <i class="search fa fa-search search-btn"></i>

                                    <div class="search-open">
                                        <form action="{{ store_route('store.search.index') }}">
                                            <div class="input-group animated fadeInDown">
                                                <input type="text" name="query" class="form-control" placeholder="{{ Lang::get('Unify::front.search.placeholder') }}">
                                        <span class="input-group-btn">
                                            <button class="btn-u" type="button">{{ Lang::get('Unify::front.search.go') }}</button>
                                        </span>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <!-- End Search Block -->
                        </ul>
                    </div>
                    <!--/end container-->
                </div>
                <!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v3 ===-->
@stop