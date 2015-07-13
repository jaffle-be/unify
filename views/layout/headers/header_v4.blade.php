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
                                <i class="fa fa-envelope"></i> Email:
                                <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="list-inline top-v1-data">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li><a href="#"><i class="fa fa-globe"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#">Quicklinks</a></li>
                            <li><a href="#">My Account</a></li>
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
                            <a class="navbar-brand" href="index.html">
                                <img id="logo-header" src="{{ theme_asset('img/logo1-default.png') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="col-md-10">
                            <a href="#"><img class="header-banner img-responsive" src="{{ theme_asset('img/banners/adds.jpg') }}" width="1000" alt=""></a>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="full-width-menu">Menu Bar</span>
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
                                <li><a href="{{ $item->url }}">{{ $item->name }}</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item->name }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $child)
                                            <li><a href="{{ $child->url }}">{{ $child->name }}</a></li>
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
                                <div class="input-group animated fadeInDown">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                                </div>
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