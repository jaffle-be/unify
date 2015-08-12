@section('styles-footer')
    <link rel="stylesheet" href="{{ theme_asset('css/footers/footer-default.css') }}">
@stop

            <!-- JS Implementing Plugins -->
@section('scripts-footer')
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
@stop

@section('footer')

    <!--=== Footer ===-->
    <div id="footer-default" class="footer-default">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- About -->
                        <div class="headline"><h2>{{ Theme::setting('footerAboutTitle') }}</h2></div>
                        <p class="margin-bottom-25 md-margin-bottom-40">{{ Theme::setting('footerAboutText') }}</p>
                        <!-- End About -->

                        <!-- Monthly Newsletter -->
                        <div class="headline"><h2>{{ Theme::setting('footerNewsletterTitle') }}</h2></div>
                        <p>{{ Theme::setting('footerNewsletterText') }}</p>

                        <form class="footer-subsribe">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Subscribe</button>
                                </span>
                            </div>
                        </form>
                        <!-- End Monthly Newsletter -->
                    </div>
                    <!--/col-md-4-->

                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- Recent Blogs -->
                        <div class="posts">
                            <div class="headline"><h2>{{ Theme::setting('footerPostsTitle') }}</h2></div>
                            @foreach($posts as $post)
                            <dl class="dl-horizontal">
                                <dt><a href="{{ route('store.blog.show', [$post]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a></dt>
                                <dd>
                                    <p>
                                        <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
                                    </p>
                                </dd>
                            </dl>
                            @endforeach
                        </div>
                        <!-- End Recent Blogs -->
                    </div>
                    <!--/col-md-4-->

                    <div class="col-md-4">
                        @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first()])

                        <!-- Social Links -->
                        <div class="headline"><h2>{{ Theme::setting('footerSocialIconsTitle') }}</h2></div>
                        @include('Unify::layout.footers.elements.social-icons-1')
                        <!-- End Social Links -->
                    </div>
                    <!--/col-md-4-->
                </div>
            </div>
        </div>
        <!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{ Carbon\Carbon::now()->format('Y') }} &copy; <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('store.home') }}">
                            <img class="pull-right" id="logo-footer" src="{{ asset($account->logo()) }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer ===-->

@stop