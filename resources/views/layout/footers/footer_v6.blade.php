

@section('scripts-footer')
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
    @stop

    @section('footer')

            <!--=== Footer v6 ===-->
    <div id="footer-v6" class="footer-v6">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 sm-margin-bottom-40">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerAboutTitle') }}</h2></div>
                        <p class="margin-bottom-20">{{ Theme::setting('footerAboutText') }}</p>


                        <div class="heading-footer"><h2>{{ Theme::setting('footerNewsletterTitle') }}</h2></div>

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

                    <!-- Useful Links -->
                    <div class="col-md-3 sm-margin-bottom-40">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerLinksTitle') }}</h2></div>
                        <ul class="list-unstyled footer-link-list">
                            @foreach(Menu::get('primary menu')->items as $item)
                            <li><a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Useful Links -->

                    <!-- Contacts -->
                    <div class="col-md-3">
                        <div class="heading-footer"><h2>{{ Theme::setting('footerContactTitle') }}</h2></div>
                        @include('Unify::layout.footers.elements.contacts-3', ['contact' => $account->contactInformation->first()])
                    </div>
                    <!-- End Contacts -->
                </div>
            </div>
            <!--/container -->
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 sm-margon-bottom-10">
                        <ul class="list-inline terms-menu">
                            <li class="silver">
                                {{ Carbon\Carbon::now()->format('Y') }} &copy; <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                            </li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        @include('Unify::layout.footers.elements.social-icons-6')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Footer v6 ===-->
@stop
