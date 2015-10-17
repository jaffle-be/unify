@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-v1.css') }}">
    @stop

    @section('header')

            <!--=== Header v1 ===-->
    <div class="header-v1">
        <!-- Topbar -->
        <div class="topbar-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline top-v1-contacts">
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{ $account->contactInformation->first()->email }}">{{ $account->contactInformation->first()->email }}</a>
                            </li>
                            @if($account->contactInformation->first()->phone)
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:{{ $account->contactInformation->first()->phone }}">{{ $account->contactInformation->first()->phone }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-md-6">

                        <ul class="navbar-nav list-inline top-v1-data">

                            @if($account->locales->count() > 1)

                                <li class="hoverSelector">
                                    <i class="fa fa-globe"></i>
                                    <ul class="languages hoverSelectorBlock">
                                        @foreach($account->locales as $locale)
                                            @if(App::getLocale() == $locale->slug)
                                                <li class="active">
                                                    <a href="#">{{$locale->name}} <i class="fa fa-check"></i></a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('store.locale', ['locale' => $locale->slug]) }}">{{ $locale->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>

                            @endif

                            {{--<li>
                                <a href="{{ route('store.shop.checkout.index') }}"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                            <li><a href="{{ route('store.shop.login') }}">Login</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">{{ Lang::get('Unify::front.toggle-navigation') }}</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('store.home') }}">
                        <img id="logo-header" src="{{ asset($account->logo()) }}" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                    <ul class="nav navbar-nav">

                        @include('Unify::layout.headers.primary-menu')

                                <!-- Search Block -->
                        <li>
                            <i class="search fa fa-search search-btn"></i>

                            <div class="search-open">
                                <form action="{{ route('store.search.index') }}">
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
                <!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>

@stop