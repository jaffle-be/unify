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

                    {{--<div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2></div>--}}

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
                <!--/col-md-3-->
                <!-- End About -->

                <!-- Simple List -->
                <div class="col-sm-3 md-margin-bottom-40">

                    <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterLinksTitle') }}</h2></div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'simple-list'])
                </div>
                <!--/col-md-3-->

                <div class="col-sm-3">
                    <div class="posts">
                        <div class="thumb-headline"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                        @foreach($posts as $post)
                            <dl class="dl-horizontal">
                                <dt>
                                    <a href="{{ route('store.blog.show', [$post->translate()]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
                                </dt>
                                <dd>
                                    <p>
                                        <a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a>
                                    </p>
                                </dd>
                            </dl>
                        @endforeach
                    </div>
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

