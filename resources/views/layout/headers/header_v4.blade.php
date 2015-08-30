@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-v4.css') }}">
    @stop

    @section('header')
            <!--=== Header v4 ===-->
    <div class="header-v4">
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
                        <ul class="list-inline top-v1-data">

                            @if($account->locales->count() > 1)

                                <li class="hoverSelector">
                                    <a href="#"><i class="fa fa-globe"></i></a>
                                    <ul class="languages hoverSelectorBlock">
                                        @foreach($account->locales as $locale)
                                            @if(app()->getLocale() == $locale->slug)
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
                    <div class="row">
                        <div class="col-md-2">
                            <a class="navbar-brand" href="{{ route('store.home') }}">
                                <img id="logo-header" src="{{ asset($account->logo()) }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-md-10">
                            <a href="#"><img class="header-banner img-responsive" src="{{ theme_asset('img/banners/adds.jpg') }}" width="1000" alt=""></a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="full-width-menu">{{ Lang::get('Unify::front.menu') }}</span>
                        <span class="icon-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="container">
                    <ul class="nav navbar-nav">
                        @foreach(Menu::get('primary menu')->items as $item)
                            @if($item->children->count() == 0)
                                <li><a href="{{ $item->url }}" target="{{ $item->target }}">{{ $item->name }}</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item->name }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $child)
                                            <li>
                                                <a href="{{ $child->url }}" target="{{ $child->target }}">{{ $child->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <!-- Search Block -->
                    <ul class="nav navbar-nav navbar-border-bottom navbar-right">
                        <li class="no-border">
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
                    </ul>
                    <!-- End Search Block -->
                </div>
                <!--/end container-->
            </div>
            <!--/navbar-collapse-->
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v4 ===-->
@stop