@section('styles-header')
    <link rel="stylesheet" href="{{ theme_asset('css/headers/header-default.css') }}">
    @stop

    @section('header')
            <!--=== Header ===-->
    <div class="header">

        <div class="container">
            <!-- Logo -->
            <a class="logo" href="{{ route('store.home') }}">
                <img src="{{ asset($account->logo()) }}" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">

                    @if($account->locales->count() > 1)
                        <li class="hoverSelector">
                            <i class="fa fa-globe"></i>
                            <a>Languages</a>
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
                        <li class="topbar-devider"></li>
                    @endif


                    <li><a href="{{ route('store.shop.checkout.index') }}">Cart (3)</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="{{ route('store.shop.login') }}">Login</a></li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div>
        <!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
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

                                    <!-- Search Block -->
                            <li>
                                <i class="search fa fa-search search-btn"></i>

                                <div class="search-open">
                                    <div class="input-group animated fadeInDown">
                                        <form action="{{ route('store.search.index') }}">
                                            <input type="text" name="query" class="form-control" placeholder="Search">
                                        </form>
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                                    </div>
                                </div>
                            </li>
                            <!-- End Search Block -->
                </ul>
            </div>
            <!--/end container-->
        </div>
        <!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

@stop