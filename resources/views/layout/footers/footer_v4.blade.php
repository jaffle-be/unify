@section('footer')
        <!--=== Footer v4 ===-->
<div id="footer-v4" class="footer-v4">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <h2 class="thumb-headline">{{ Theme::setting('layoutFooterContactTitle') }}</h2>
                    @include('Unify::layout.footers.elements.contacts-2', ['contact' => $account->contactInformation->first()])

                    @include('Unify::layout.footers.elements.social-icons-4')
                </div>
                <!-- End About -->

                <div class="col-md-4">
                    @if($account->modules->active('blog'))
                    <div class="posts">
                        <h2 class="thumb-headline">{{ Theme::setting('layoutFooterPostsTitle') }}</h2>
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

                    <h2 class="thumb-headline">{{ Theme::setting('layoutFooterLinksTitle') }}</h2>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'simple-list'])
                </div>

                <div class="col-md-4">
                    <h2 class="thumb-headline">{{ Theme::setting('layoutFooterAboutTitle') }}</h2>

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
                        @copyright
                    </p>
                </div>
                <div class="col-md-6">
                    {{--<ul class="list-inline sponsors-icons pull-right">
                        <li><i class="fa fa-cc-paypal"></i></li>
                        <li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-discover"></i></li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
    <!--/copyright-->
</div>
<!--=== End Footer v4 ===-->
@stop
