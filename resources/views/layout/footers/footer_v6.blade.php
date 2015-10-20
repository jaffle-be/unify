@section('footer')

        <!--=== Footer v6 ===-->
<div id="footer-v6" class="footer-v6">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About Us -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterAboutTitle') }}</h2></div>
                    <p class="margin-bottom-20">{{ Theme::setting('layoutFooterAboutText') }}</p>


                    {{--<div class="heading-footer"><h2>{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2></div>--}}

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
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 sm-margin-bottom-40">
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

                <!-- Useful Links -->
                <div class="col-md-3 sm-margin-bottom-40">
                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterLinksTitle') }}</h2></div>
                    @include('Unify::layout.footers.menu', ['optional_class'=> 'footer-link-list'])
                </div>
                <!-- End Useful Links -->

                <!-- Contacts -->
                <div class="col-md-3">
                    <div class="heading-footer"><h2>{{ Theme::setting('layoutFooterContactTitle') }}</h2></div>
                    @include('Unify::layout.footers.elements.contacts-3', ['contact' => $account->contactInformation->first()])
                </div>
                <!-- End Contacts -->
            </div>
        </div>
        <!--/container -->
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 sm-margon-bottom-10">
                    <ul class="list-inline terms-menu">
                        <li class="silver">
                            @copyright
                        </li>
                        {{--<li><a href="#">Privacy Policy</a></li>--}}
                        {{--<li><a href="#">Terms of Service</a></li>--}}
                    </ul>
                </div>
                <div class="col-md-4">
                    @include('Unify::layout.footers.elements.social-icons-6')
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Footer v6 ===-->
@stop
