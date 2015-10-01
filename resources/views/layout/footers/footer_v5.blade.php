@section('footer')
        <!--=== Footer v5 ===-->
<div id="footer-v5" class="footer-v5">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-4 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterAboutTitle') }}</h2></div>
                    <p class="margin-bottom-20">{{ Theme::setting('layoutFooterAboutText') }}</p>

                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterContactTitle') }}</h2></div>

                    @include('Unify::layout.footers.elements.contacts-3', ['contact' => $account->contactInformation->first()])

                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-4 sm-margin-bottom-40">

                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                    <ul class="list-unstyled link-news">
                        @foreach($posts as $post)
                            <li>
                                <a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a>
                                <small>{{ $post->publish_at->format('d M, Y') }}</small>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Recent News -->

                <!-- Recent Blog Entries -->
                <div class="col-md-4 sm-margin-bottom-40">
                    {{--<div class="heading-footer"><h2>{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2></div>--}}

                    {{--<p>{{ Theme::setting('layoutFooterNewsletterText') }}</p>--}}

                    {{--<form class="footer-subsribe margin-bottom-20">--}}
                    {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control" placeholder="{{ Lang::get('Unify::front.newsletter.email') }}">--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn-u" type="button">{{ Lang::get('Unify::front.newsletter.subscribe') }}</button>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</form>--}}

                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterSocialIconsTitle') }}</h2></div>
                    @include('Unify::layout.footers.elements.social-icons-5')
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                {{--<div class="col-md-4">--}}
                {{--<div class="heading-footer"><h2>{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>--}}
                {{--<ul class="list-unstyled tweets">--}}
                {{--<li>--}}
                {{--<i class="fa fa-twitter"></i>--}}

                {{--<div class="overflow-h">--}}
                {{--<p>--}}
                {{--<a href="#">&#64;Toronto </a>voluptates repudiandae sint et molestiae non recusandae.--}}
                {{--</p>--}}
                {{--<small>3 Hours ago</small>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-twitter"></i>--}}

                {{--<div class="overflow-h">--}}
                {{--<p>--}}
                {{--<a href="#">&#64;Twitter </a>Maecenas pharetra tellus et fringilla. Praesent ut consectetur diam.--}}
                {{--</p>--}}
                {{--<small>7 Hours ago</small>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                <!-- End Latest Tweets -->
            </div>
        </div>
        <!--/container -->
    </div>

    <div class="copyright">
        <div class="container">
            <ul class="list-inline terms-menu">
                <li class="silver">
                    @copyright
                </li>
                {{--<li><a href="#">Privacy Policy</a></li>--}}
                {{--<li><a href="#">Terms of Service</a></li>--}}
            </ul>
        </div>
    </div>
</div>
<!--=== End Footer v5 ===-->
@stop