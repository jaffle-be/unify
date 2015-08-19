@section('scripts-footer')
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
@stop

@section('footer')
    <!--=== Footer v1 ===-->
    <div id="footer-v1" class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>{{ Theme::setting('footerAboutTitle') }}</h2></div>
                            <p>{{ Theme::setting('footerAboutText') }}</p>

                        @include('Unify::layout.footers.elements.newsletter')
                    </div>
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>{{ Theme::setting('footerPostsTitle') }}</h2></div>
                            <ul class="list-unstyled latest-list">
                                @foreach($posts as $post)
                                    <li>
                                        <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
                                        <small>{{ $post->publish_at->format('M d, Y') }}</small>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>{{ Theme::setting('footerLinksTitle') }}</h2></div>
                        <ul class="list-unstyled link-list">
                            @foreach(Menu::get('primary menu')->items as $item)
                            <li><a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a><i class="fa fa-angle-right"></i></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Link List -->

                    @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first()])
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

                    <!-- Social Links -->
                    <div class="col-md-6">
                        @include('Unify::layout.footers.elements.social-icons-2')
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer v1 ===-->

@stop