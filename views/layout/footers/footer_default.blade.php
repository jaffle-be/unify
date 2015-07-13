@section('styles-footer')
    <link rel="stylesheet" href="{{ theme_asset('css/footers/footer-default.css') }}">
@stop

            <!-- JS Implementing Plugins -->
@section('scripts-footer')
    <script type="text/javascript" src="{{ theme_asset('plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/smoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/jquery.parallax.js') }}"></script>
@stop

@section('footer')

    <!--=== Footer ===-->
    <div id="footer-default" class="footer-default">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- About -->
                        <div class="headline"><h2>About</h2></div>
                        <p class="margin-bottom-25 md-margin-bottom-40">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>
                        <!-- End About -->

                        <!-- Monthly Newsletter -->
                        <div class="headline"><h2>Monthly Newsletter</h2></div>
                        <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>

                        <form class="footer-subsribe">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Subscribe</button>
                                </span>
                            </div>
                        </form>
                        <!-- End Monthly Newsletter -->
                    </div>
                    <!--/col-md-4-->

                    <div class="col-md-4 md-margin-bottom-40">
                        <!-- Recent Blogs -->
                        <div class="posts">
                            <div class="headline"><h2>Recent Blog Entries</h2></div>
                            <dl class="dl-horizontal">
                                <dt><a href="#"><img src="{{ theme_asset('img/sliders/elastislide/6.jpg') }}" alt=""/></a></dt>
                                <dd>
                                    <p>
                                        <a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a>
                                    </p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><a href="#"><img src="{{ theme_asset('img/sliders/elastislide/10.jpg') }}" alt=""/></a></dt>
                                <dd>
                                    <p>
                                        <a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a>
                                    </p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><a href="#"><img src="{{ theme_asset('img/sliders/elastislide/11.jpg') }}" alt=""/></a></dt>
                                <dd>
                                    <p>
                                        <a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a>
                                    </p>
                                </dd>
                            </dl>
                        </div>
                        <!-- End Recent Blogs -->
                    </div>
                    <!--/col-md-4-->

                    <div class="col-md-4">
                        <!-- Contact Us -->
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br/>
                            California, US <br/>
                            Phone: 800 123 3456 <br/>
                            Fax: 800 123 3456 <br/>
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                        <!-- End Contact Us -->

                        <!-- Social Links -->
                        <div class="headline"><h2>Stay Connected</h2></div>
                        <ul class="social-icons">
                            <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                            <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                            <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                            <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                            <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                            <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                            <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                        </ul>
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
                            2015 &copy; Unify. ALL Rights Reserved.
                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <a href="index.html">
                            <img class="pull-right" id="logo-footer" src="{{ theme_asset('img/logo2-default.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/copyright-->
    </div>
    <!--=== End Footer ===-->

@stop