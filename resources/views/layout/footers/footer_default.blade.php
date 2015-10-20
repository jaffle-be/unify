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
                </div>
                <!--/col-md-4-->

                <div class="col-md-4 md-margin-bottom-40">
                    <!-- Recent Blogs -->
                    <div class="posts">
                        <div class="headline"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                        @foreach($posts as $post)
                            <dl class="dl-horizontal">
                                <dt>
                                    <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}"><img src="{{ asset($post->thumbnail(60)) }}" alt=""/></a>
                                </dt>
                                <dd>
                                    <p>
                                        <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a>
                                    </p>
                                </dd>
                            </dl>
                        @endforeach
                    </div>
                    <!-- End Recent Blogs -->
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
                    <a href="{{ route('store.home') }}">
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