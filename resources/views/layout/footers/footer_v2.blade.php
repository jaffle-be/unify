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

                    @include('Unify::layout.footers.elements.newsletter', ['small' => true])
                </div>
                <!-- End About -->

                <!-- Link List -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2 class="heading-sm">{{ Theme::setting('layoutFooterLinksTitle') }}</h2>
                    </div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'link-list'])

                    @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first(), 'small' => true])

                            <!-- Social Links -->
                    @include('Unify::layout.footers.elements.social-icons-3')
                            <!-- End Social Links -->
                </div>
                <!-- End Link List -->

                <!-- Latest Tweets -->
                <div class="col-md-4 md-margin-bottom-40">
                    @if(count($tweets))
                        <div class="latest-tweets">
                            <div class="headline">
                                <h2 class="heading-sm">{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>
                            @foreach($tweets as $tweet)
                            <div class="latest-tweets-inner">
                                <i class="fa fa-twitter"></i>

                                <p>
                                    {!! app('ttwitter')->linkify($tweet->text) !!}
                                    <small class="twitter-time">{!! ago($tweet->created_at) !!}</small>
                                </p>
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <!-- End Latest Tweets -->

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