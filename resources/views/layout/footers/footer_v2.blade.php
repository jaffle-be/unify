@section('styles-footer')
    <link rel="stylesheet" href="{{ theme_asset('css/footers/footer-v2.css') }}">
@stop

@section('scripts-footer')

    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
@stop

@section('footer')
    <!--=== Footer v2 ===-->
    <div id="footer-v2" class="footer-v2">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2 class="heading-sm">{{ Theme::setting('footerAboutTitle') }}</h2></div>

                        <p class="margin-bottom-20">{{ Theme::setting('footerAboutText') }}</p>

                        <div class="headline"><h2 class="heading-sm">{{ Theme::setting('footerNewsletterTitle') }}</h2></div>

                        <p>{{ Theme::setting('footerNewsletterText') }}</p>

                        <form class="footer-subsribe">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">                            
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- End About -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2 class="heading-sm">{{ Theme::setting('footerLinksTitle') }}</h2></div>
                        <ul class="list-unstyled link-list">
                            @foreach(Menu::get('primary menu')->items as $item)
                            <li><a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a><i class="fa fa-angle-right"></i></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Link List -->

                    <!-- Latest Tweets -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="latest-tweets">
                            <div class="headline"><h2 class="heading-sm">{{ Theme::setting('footerTweetsTitle') }}</h2></div>
                            <div class="latest-tweets-inner">
                                <i class="fa fa-twitter"></i>

                                <p>
                                    <a href="#">@htmlstream</a>
                                    At vero seos etodela ccusamus et
                                    <a href="#">http://t.co/sBav7dm</a>
                                    <small class="twitter-time">2 hours ago</small>
                                </p>
                            </div>
                            <div class="latest-tweets-inner">
                                <i class="fa fa-twitter"></i>

                                <p>
                                    <a href="#">@htmlstream</a>
                                    At vero seos etodela ccusamus et
                                    <a href="#">http://t.co/sBav7dm</a>
                                    <small class="twitter-time">4 hours ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Latest Tweets -->

                    <!-- Address -->
                    <div class="col-md-3 md-margin-bottom-40">

                        @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first(), 'small' => true])

                        <!-- Social Links -->
                        @include('Unify::layout.footers.elements.social-icons-3')
                        <!-- End Social Links -->
                    </div>
                    <!-- End Address -->
                </div>
            </div>
        </div>
        <!--/footer-->

        <div class="copyright">
            <div class="container">
                <p class="text-center">
                    {{ Carbon\Carbon::now()->format('Y') }} &copy; <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </p>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer v2 ===-->

@stop