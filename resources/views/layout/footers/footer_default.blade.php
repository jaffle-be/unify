@section('footer')

        <!--=== Footer ===-->
<div id="footer-default" class="footer-default">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>{{ Theme::setting('layoutFooterAboutTitle') }}</h2></div>
                    <p class="margin-bottom-25 md-margin-bottom-40">{{ Theme::setting('layoutFooterAboutText') }}</p>
                    <!-- End About -->

                    @include('Unify::layout.footers.elements.newsletter')

                            <!-- Latest Tweets -->
                    @if(count($tweets))
                        <div class="headline"><h2>{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>
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
                    <!-- End Latest Tweets -->
                </div>
                <!--/col-md-4-->

                <div class="col-md-4 md-margin-bottom-40">

                    @if($account->modules->active('blog'))
                            <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                        @foreach($posts as $post)
                            <dl class="dl-horizontal">
                                <dt>
                                    <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
                                </dt>
                                <dd>
                                    <p>
                                        <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a>
                                    </p>
                                </dd>
                            </dl>
                        @endforeach
                    </div>
                    <!-- End Recent Blogs -->
                    @endif
                </div>
                <!--/col-md-4-->

                <div class="col-md-4">
                    @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first()])

                            <!-- Social Links -->
                    <div class="headline"><h2>{{ Theme::setting('layoutFooterSocialIconsTitle') }}</h2></div>
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
                        @copyright
                        {{--<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>--}}
                    </p>
                </div>
                <div class="col-md-6">
                    <a href="{{ store_route('store.home') }}">
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