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

                    @if($account->modules->active('blog'))
                        <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                        <ul class="list-unstyled link-news">
                            @foreach($posts as $post)
                                <li>
                                    <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a>
                                    <small>{{ $post->publish_at->format('d M, Y') }}</small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <!-- End Recent News -->

                <!-- Recent Blog Entries -->
                <div class="col-md-4 sm-margin-bottom-40">
                    @include('Unify::layout.footers.elements.newsletter', ['class' => 'heading-footer'])

                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterSocialIconsTitle') }}</h2></div>
                    @include('Unify::layout.footers.elements.social-icons-5')
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-4">
                    @if(count($tweets))
                        <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>
                        <ul class="list-unstyled tweets">
                            @foreach($tweets as $tweet)
                                <li>
                                    <i class="fa fa-twitter"></i>

                                    <div class="overflow-h">
                                        <p>{!! app('ttwitter')->linkify($tweet->text) !!}</p>
                                        <small>{{ ago($tweet->created_at) }}</small>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
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