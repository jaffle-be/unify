@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-v2.css') }}">
    @stop

    @section('header')
            <!--=== Header v2 ===-->
    <div class="header-v2 header-sticky">
        <div class="container container-space">
            <!-- Topbar v2 -->
            <div class="topbar-v2">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="list-inline top-v2-contacts">
                            <li>Email:
                                <a href="mailto:info@htmlstream.com">{{ $account->contactInformation->first()->email }}</a>
                            </li>
                            @if($account->contactInformation->first()->phone)
                                <li>
                                    <a href="tel:{{ $account->contactInformation->first()->phone }}">{{ $account->contactInformation->first()->phone }}</a>
                                </li>
                            @endif

                            @if($account->locales->count() > 1)
                                <li>
                                    <div class="language-bar">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="heading">Languages</span>
                                        </a>
                                        <ul class="languages-dropdown" role="menu">
                                            @foreach($account->locales as $locale)
                                                @if(App::getLocale() == $locale->slug)
                                                    <li class="active"><a>{{ $locale->name }}</a></li>
                                                @else
                                                    <li>
                                                        <a href="{{ route('store.locale', ['locale' => $locale->slug]) }}">{{ $locale->name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="topbar-buttons pull-right">
                            <a href="{{ route('store.shop.checkout.index') }}" class="btn-u btn-brd btn-brd-hover btn-u-light margin-right-5">Cart (3)</a>
                            <a href="{{ route('store.shop.login') }}" class="btn-u">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar v2 -->
        </div>

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container container-space">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand brand-style" href="{{ route('store.home') }}">
                        <img id="logo-header" src="{{ asset($account->logo()) }}" width="85" height="32" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
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
                </div>
                <!--/navbar-collapse-->
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v2 ===-->
@stop