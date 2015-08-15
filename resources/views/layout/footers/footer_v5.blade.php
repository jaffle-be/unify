

@section('scripts-footer')
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    @stop

    @section('footer')
            <!--=== Footer v5 ===-->
    <div id="footer-v5" class="footer-v5">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 sm-margin-bottom-40">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerAboutTitle') }}</h2></div>
                        <p class="margin-bottom-20">{{ Theme::setting('footerAboutText') }}</p>

                        <div class="heading-footer"><h2>{{ Theme::setting('footerContactTitle') }}</h2></div>

                        @include('Unify::layout.footers.elements.contacts-3', ['contact' => $account->contactInformation->first()])

                    </div>
                    <!-- End About Us -->

                    <!-- Recent News -->
                    <div class="col-md-3 sm-margin-bottom-40">

                        <div class="heading-footer"><h2>{{ Theme::setting('footerPostsTitle') }}</h2></div>
                        <ul class="list-unstyled link-news">
                            @foreach($posts as $post)
                                <li>
                                    <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
                                    <small>{{ $post->publish_at->format('d M, Y') }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Recent News -->

                    <!-- Recent Blog Entries -->
                    <div class="col-md-3 sm-margin-bottom-40">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerNewsletterTitle') }}</h2></div>

                        <p>{{ Theme::setting('footerNewsletterText') }}</p>

                        <form class="footer-subsribe margin-bottom-20">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </form>

                        <div class="heading-footer"><h2>{{ Theme::setting('footerSocialIconsTitle') }}</h2></div>
                        @include('Unify::layout.footers.elements.social-icons-5')
                    </div>
                    <!-- End Recent Blog Entries -->

                    <!-- Latest Tweets -->
                    <div class="col-md-3">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerTweetsTitle') }}</h2></div>
                        <ul class="list-unstyled tweets">
                            <li>
                                <i class="fa fa-twitter"></i>

                                <div class="overflow-h">
                                    <p>
                                        <a href="#">&#64;Toronto </a>voluptates repudiandae sint et molestiae non recusandae.
                                    </p>
                                    <small>3 Hours ago</small>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i>

                                <div class="overflow-h">
                                    <p>
                                        <a href="#">&#64;Twitter </a>Maecenas pharetra tellus et fringilla. Praesent ut consectetur diam.
                                    </p>
                                    <small>7 Hours ago</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Latest Tweets -->
                </div>
            </div>
            <!--/container -->
        </div>

        <div class="copyright">
            <div class="container">
                <ul class="list-inline terms-menu">
                    <li class="silver">
                        {{ Carbon\Carbon::now()->format('Y') }} &copy; <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                    </li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--=== End Footer v5 ===-->
@stop