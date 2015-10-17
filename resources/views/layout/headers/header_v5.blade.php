@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-v5.css') }}">
    @stop

    @section('header')
            <!--=== Header v5 ===-->
    <div class="header-v5">
        <!-- Topbar v3 -->
        <div class="topbar-v3">
            <div class="search-open">
                <div class="container">
                    <form action="{{ route('store.search.index') }}">
                        <input type="text" class="form-control" name="query" placeholder="Search">
                    </form>

                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Topbar Navigation -->
                        <ul class="left-topbar">
                            @if($account->locales->count() > 1)
                                <li>
                                    <a>{{ app()->getLocale() }}</a>
                                    <ul class="language">
                                        @foreach($account->locales as $locale)
                                            @if($locale == app()->getLocale())
                                                <li class="active">
                                                    <a href="#">{{ $locale->name }}<i class="fa fa-check"></i></a>
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
                        </ul>
                        <!--/end left-topbar-->
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            {{--<li><a href="{{ route('store.shop.login') }}">Login</a> |
                                <a href="{{ route('store.shop.register') }}">Register</a>
                            </li>--}}
                            <li><i class="search fa fa-search search-button"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">{{ Lang::get('Unify::front.toggle-navigation') }}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('store.home') }}">
                        <img id="logo-header" src="{{ asset($account->logo()) }}" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Badge -->
                    {{--<ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-sea rounded-x">3</span>
                            <ul class="list-unstyled badge-open" data-mcs-theme="minimal-dark">
                                <li class="subtotal">
                                    <div class="overflow-h margin-bottom-10">
                                        <p>NO PRODUCTS IN THE CART</p>
                                        <hr class="hr-xs">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="{{ route('store.shop.checkout.index' ) }}" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
                                        </div>
                                        <div class="col-xs-6 text-right padding-top-5">
                                            <strong>TOTAL: $0.00</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>--}}
                    <!-- End Badge -->

                    <ul class="nav navbar-nav">
                        @include('Unify::layout.headers.primary-menu')
                    </ul>
                </div>
                <!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v5 ===-->
@stop