

    @section('scripts-footer')
            <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    @stop

    @section('footer')
            <!--=== Footer v4 ===-->
    <div id="footer-v4" class="footer-v4">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <h2 class="thumb-headline">{{ Theme::setting('footerContactTitle') }}</h2>
                        @include('Unify::layout.footers.elements.contacts-2', ['contact' => $account->contactInformation->first()])

                        @include('Unify::layout.footers.elements.social-icons-4')
                    </div>
                    <!-- End About -->

                    <!-- Simple List -->
                    <div class="col-md-3">
                        <h2 class="thumb-headline">{{ Theme::setting('footerLinksTitle') }}</h2>
                        <ul class="list-unstyled simple-list">
                            @foreach(Menu::get('primary menu')->items as $item)
                            <li><a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <div class="posts">
                            <h2 class="thumb-headline">{{ Theme::setting('footerPostsTitle') }}</h2>
                            @foreach($posts as $post)
                                <dl class="dl-horizontal">
                                    <dt>
                                        <a href="{{ route('store.blog.show', [$post]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
                                    </dt>
                                    <dd>
                                        <p>
                                            <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
                                        </p>
                                    </dd>
                                </dl>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h2 class="thumb-headline">{{ Theme::setting('footerAboutTitle') }}</h2>

                        <p class="margin-bottom-20">{{ Theme::setting('footerAboutText') }}</p>

                        <h2 class="thumb-headline">{{ Theme::setting('footerNewsletterTitle') }}</h2>

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
                    <!-- End Simple List -->
                </div>
            </div>
            <!--/end continer-->
        </div>
        <!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {{ Carbon\Carbon::now()->format('Y') }} &copy;
                            <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline sponsors-icons pull-right">
                            <li><i class="fa fa-cc-paypal"></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer v4 ===-->
@stop
