@section('footer')
        <!--=== Footer v1 ===-->
<div id="footer-v1" class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2>{{ Theme::setting('layoutFooterAboutTitle') }}</h2></div>
                    <p>{{ Theme::setting('layoutFooterAboutText') }}</p>

                    @include('Unify::layout.footers.elements.newsletter')
                </div>
                <!-- End About -->

                <!-- Latest -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="posts">
                        <div class="headline"><h2>{{ Theme::setting('layoutFooterPostsTitle') }}</h2></div>
                        <ul class="list-unstyled latest-list">
                            @foreach($posts as $post)
                                <li>
                                    <a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a>
                                    <small>{{ $post->publish_at->format('M d, Y') }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    @include('Unify::layout.footers.elements.contacts-1', ['contact' => $account->contactInformation->first()])
                </div>
                <!-- End Latest -->

                <!-- Link List -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2>{{ Theme::setting('layoutFooterLinksTitle') }}</h2></div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'link-list'])
                </div>
                <!-- End Link List -->
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