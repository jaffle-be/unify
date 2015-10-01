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
                    <div class="posts">
                        <h2 class="thumb-headline">{{ Theme::setting('layoutFooterPostsTitle') }}</h2>
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

                    <h2 class="thumb-headline">{{ Theme::setting('layoutFooterLinksTitle') }}</h2>
                    <ul class="list-unstyled simple-list">
                        @foreach(Menu::get('primary menu')->items as $item)
                            <li>
                                <a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-4">
                    <h2 class="thumb-headline">{{ Theme::setting('layoutFooterAboutTitle') }}</h2>

                    <p class="margin-bottom-20">{{ Theme::setting('layoutFooterAboutText') }}</p>

                    {{--<h2 class="thumb-headline">{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2>--}}

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
