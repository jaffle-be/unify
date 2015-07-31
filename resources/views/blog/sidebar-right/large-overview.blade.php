@extends('Unify::Unify')

@section('styles-plugins')
    @parent
    <link rel="stylesheet" href="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.css') }}">
@stop

@section('breadcrumb')
    <div class="breadcrumbs-v1">
        <div class="container">
            <span>Blog Page</span>

            <h1>Basic With Sidebar</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="bg-color-light">
        <div class="container content-sm">
            <div class="row">
                <!-- Blog All Posts -->
                <div class="col-md-9">
                    <!-- Blog Posts -->
                    <div class="news-v3 margin-bottom-60">
                        <img class="img-responsive full-width" src="{{ theme_asset('img/main/img12.jpg') }}" alt="">

                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By <a href="#">Alexander Jenni</a></li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 24, 2015</li>
                            </ul>
                            <h2><a href="#">Incredible standard post “IMAGE”</a></h2>

                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <ul class="post-shares">
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-speech"></i>
                                        <span>26</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-share"></i>
                                        <span>98</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-heart"></i>
                                        <span>30</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Blog Posts -->

                    <!-- Blog Posts -->
                    <div class="news-v3 margin-bottom-60">
                        <div class="carousel slide carousel-v2" id="portfolio-carousel">
                            <ol class="carousel-indicators">
                                <li class="rounded-x active" data-target="#portfolio-carousel" data-slide-to="0"></li>
                                <li class="rounded-x" data-target="#portfolio-carousel" data-slide-to="1"></li>
                                <li class="rounded-x" data-target="#portfolio-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive full-width" src="{{ theme_asset('img/main/img16.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ theme_asset('img/main/img4.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ theme_asset('img/main/img5.jpg') }}" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="prev">
                                <i class="fa fa-angle-left arrow-prev"></i>
                            </a>
                            <a class="right carousel-control rounded-x" href="#portfolio-carousel" role="button" data-slide="next">
                                <i class="fa fa-angle-right arrow-next"></i>
                            </a>
                        </div>

                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By Luke Etheridge</li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 24, 2015</li>
                            </ul>
                            <h2><a href="#">Amazing post “IMAGE-SLIDER”</a></h2>

                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <ul class="post-shares">
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-speech"></i>
                                        <span>5</span>
                                    </a>
                                </li>
                                <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                                <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Blog Posts -->

                    <!-- Blog Posts -->
                    <div class="news-v3 margin-bottom-60">
                        <div class="responsive-video">
                            <iframe src="//player.vimeo.com/video/93003441?color=567fc7" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By Alexander Jenni</li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 24, 2015</li>
                            </ul>
                            <h2><a href="#">Awesome post “VIDEO”</a></h2>

                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <ul class="post-shares">
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-speech"></i>
                                        <span>5</span>
                                    </a>
                                </li>
                                <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                                <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Blog Posts -->

                    <!-- Blog Posts -->
                    <div class="blog-post-quote margin-bottom-60">
                        <p>Look deep into nature, and then you will understand everything better.</p>
                        <span>- Albert Einstein</span>
                    </div>
                    <!-- End Blog Posts -->

                    <!-- Blog Posts -->
                    <div class="news-v3 margin-bottom-60">
                        <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/19048953&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>

                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By Luke Etheridge</li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 24, 2015</li>
                            </ul>
                            <h2><a href="#">Wonderful post “AUDIO”</a></h2>

                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <ul class="post-shares">
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-speech"></i>
                                        <span>5</span>
                                    </a>
                                </li>
                                <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                                <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Blog Posts -->

                    <!-- Pager v2 -->
                    <ul class="pager pager-v2 pager-md no-margin">
                        <li class="previous"><a href="#">&larr; Older</a></li>
                        <li class="page-amount">1 of 7</li>
                        <li class="next"><a href="#">Newer &rarr;</a></li>
                    </ul>
                    <!-- End Pager v2 -->
                </div>
                <!-- End Blog All Posts -->

                <!-- Blog Sidebar -->
                <div class="col-md-3">
                    <div class="headline-v2"><h2>Trending</h2></div>
                    <!-- Trending -->
                    <ul class="list-unstyled blog-trending margin-bottom-50">
                        <li>
                            <h3><a href="#">Praesent tincidunt ornare tortor</a></h3>
                            <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                        </li>
                        <li>
                            <h3><a href="#">Nunc leo leo, faucibus non gravida</a></h3>
                            <small>22 Jan, 2015 / <a href="#">Marketing</a></small>
                        </li>
                        <li>
                            <h3><a href="#">Proin dapibus ornare magna.</a></h3>
                            <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                        </li>
                        <li>
                            <h3><a href="#">Fusce at diam ante.</a></h3>
                            <small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
                        </li>
                        <li>
                            <h3><a href="#">Donec quis consequat magna...</a></h3>
                            <small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
                        </li>
                    </ul>
                    <!-- End Trending -->

                    <div class="headline-v2"><h2>Latest Posts</h2></div>
                    <!-- Latest Links -->
                    <ul class="list-unstyled blog-latest-posts margin-bottom-50">
                        <li>
                            <h3><a href="#">Wireframe for the news view...</a></h3>
                            <small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio leo.</p>
                        </li>
                        <li>
                            <h3><a href="#">It is a long established fact that a reader</a></h3>
                            <small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
                            <p>Pellentesque efficitur blandit dui, porta cursus velit imperdiet sit amet.</p>
                        </li>
                        <li>
                            <h3><a href="#">The point of using Lorem Ipsum</a></h3>
                            <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                            <p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a. Nunc nec auctor mauris, semper scelerisque nibh.</p>
                        </li>
                        <li>
                            <h3><a href="#">Many desktop publishing packages...</a></h3>
                            <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                            <p>Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
                        </li>
                    </ul>
                    <!-- End Latest Links -->

                    <div class="headline-v2"><h2>Tags</h2></div>
                    <!-- Tags v2 -->
                    <ul class="list-inline tags-v2 margin-bottom-50">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Economy</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Elections</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Web Hosting</a></li>
                        <li><a href="#">Wrapbootstrap</a></li>
                        <li><a href="#">Art</a></li>
                    </ul>
                    <!-- End Tags v2 -->

                    <div class="headline-v2"><h2>Photostream</h2></div>
                    <!-- Photostream -->
                    <ul class="list-inline blog-photostream margin-bottom-50">
                        <li>
                            <a href="{{ theme_asset('img/main/img22.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 1">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img22.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img23.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 2">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img23.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img4.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 3">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img4.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img9.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 4">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img9.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img25.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 5">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img25.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img6.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 6">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img6.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img20.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 7">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img20.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img3.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 8">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img3.jpg') }}" alt=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ theme_asset('img/main/img7.jpg') }}" rel="gallery" class="fancybox img-hover-v2" title="Image 9">
                                <span><img class="img-responsive" src="{{ theme_asset('img/main/img7.jpg') }}" alt=""></span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Photostream -->

                    <div class="headline-v2"><h2>Newsletter</h2></div>
                    <!-- Blog Newsletter -->
                    <div class="blog-newsletter">
                        <p>Subscribe to our newsletter for good news, sent out every month.</p>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email">
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribe</button>
                            </span>
                        </div>
                    </div>
                    <!-- End Blog Newsletter -->
                </div>
                <!-- End Blog Sidebar -->
            </div>
        </div>
    </div>
@stop


@section('scripts-plugins')
    @parent
    <script type="text/javascript" src="{{ theme_asset('plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/plugins/fancy-box.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            FancyBox.initFancybox();
        });
    </script>
@stop
