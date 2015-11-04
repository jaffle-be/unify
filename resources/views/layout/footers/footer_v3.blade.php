@section('footer')
        <!--=== Footer v3 ===-->
<div id="footer-v3" class="footer-v3">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-sm-3 md-margin-bottom-40">
                    <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterAboutTitle') }}</h2></div>

                    <p class="margin-bottom-20">{{ Theme::setting('layoutFooterAboutText') }}</p>

                    @include('Unify::layout.footers.elements.newsletter', ['class' => 'thumb-headline'])

                    <!-- Latest Tweets -->
                        @if(count($tweets))
                            <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterTweetsTitle') }}</h2></div>
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
                <!--/col-md-3-->
                <!-- End About -->

                <!-- Simple List -->
                <div class="col-sm-3 md-margin-bottom-40">

                    <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterLinksTitle') }}</h2></div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'simple-list'])
                </div>
                <!--/col-md-3-->

                <div class="col-sm-3">

                    @if($account->modules->active('blog'))
                        <div class="posts">
                            <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
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
                    @endif
                </div>
                <!--/col-md-3-->

                <div class="col-sm-3">

                    <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterContactTitle') }}</h2></div>
                    @include('Unify::layout.footers.elements.contacts-3', ['contact' => $account->contactInformation->first()])

                </div>
                <!--/col-md-3-->
                <!-- End Simple List -->
            </div>
        </div>
    </div>
    <!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <!-- Terms Info-->
                <div class="col-md-6">
                    <p>
                        @copyright
                        {{--<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>--}}
                    </p>
                </div>
                <!-- End Terms Info-->

                <!-- Social Links -->
                <div class="col-md-6">
                    @include('Unify::layout.footers.elements.social-icons-8')
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div>
    <!--/copyright-->
</div>
<!--=== End Footer v3 ===-->
@stop

