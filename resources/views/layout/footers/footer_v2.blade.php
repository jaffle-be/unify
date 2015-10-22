@section('footer')
        <!--=== Footer v2 ===-->
<div id="footer-v2" class="footer-v2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2 class="heading-sm">{{ Theme::setting('layoutFooterAboutTitle') }}</h2>
                    </div>

                    <p class="margin-bottom-20">{{ Theme::setting('layoutFooterAboutText') }}</p>

                    {{--<div class="headline"><h2 class="heading-sm">{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2></div>--}}

                    {{--<p>{{ Theme::setting('layoutFooterNewsletterText') }}</p>--}}

                    {{--<form class="footer-subsribe">--}}
                    {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control" placeholder="{{ Lang::get('Unify::front.newsletter.email') }}">--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn-u" type="button">{{ Lang::get('Unify::front.newsletter.subscribe') }}</button>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                </div>
                <!-- End About -->

                <!-- Link List -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2 class="heading-sm">{{ Theme::setting('layoutFooterLinksTitle') }}</h2>
                    </div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'link-list'])
                </div>
                <!-- End Link List -->

                <!-- Latest Tweets -->
                {{--<div class="col-md-4 md-margin-bottom-40">--}}
                {{--<div class="latest-tweets">--}}
                {{--<div class="headline"><h2 class="heading-sm">{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>--}}
                {{--<div class="latest-tweets-inner">--}}
                {{--<i class="fa fa-twitter"></i>--}}

                {{--<p>--}}
                {{--<a href="#">@htmlstream</a>--}}
                {{--At vero seos etodela ccusamus et--}}
                {{--<a href="#">//t.co/sBav7dm</a>--}}
                {{--<small class="twitter-time">2 hours ago</small>--}}
                {{--</p>--}}
                {{--</div>--}}
                {{--<div class="latest-tweets-inner">--}}
                {{--<i class="fa fa-twitter"></i>--}}

                {{--<p>--}}
                {{--<a href="#">@htmlstream</a>--}}
                {{--At vero seos etodela ccusamus et--}}
                {{--<a href="#">//t.co/sBav7dm</a>--}}
                {{--<small class="twitter-time">4 hours ago</small>--}}
                {{--</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <!-- End Latest Tweets -->

                <!-- Address -->
                <div class="col-md-4 md-margin-bottom-40">

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
                @copyright
                {{--<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>--}}
            </p>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer v2 ===-->

@stop