<div class="shop-product">

    <div class="container">
        <div class="row">
            <div class="col-md-6 md-margin-bottom-50">
                <div class="ms-showcase2-template">
                    <!-- Master Slider -->
                    <div class="master-slider ms-skin-default" id="masterslider">
                        @foreach($product->images as $image)
                        <div class="ms-slide">
                            <img class="ms-brd" src="{{ theme_asset('img/blank.gif') }}" data-src="{{ asset($image->thumbnail(1140)) }}">
                            <img class="ms-thumb" src="{{ asset($image->thumbnail(340)) }}">
                        </div>
                        @endforeach
                    </div>
                    <!-- End Master Slider -->
                </div>
            </div>

            <div class="col-md-6">
                <div class="shop-product-heading">
                    <h2>{{ $product->name }}</h2>
                    <ul class="list-inline shop-product-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div><!--/end shop product social-->

                {{--<ul class="list-inline product-ratings margin-bottom-30">--}}
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating fa fa-star"></i></li>--}}
                    {{--<li><i class="rating fa fa-star"></i></li>--}}
                    {{--<li class="product-review-list">--}}
                        {{--<span>(1) <a href="#">Review</a> | <a href="#"> Add Review</a></span>--}}
                    {{--</li>--}}
                {{--</ul><!--/end shop product ratings-->--}}

                {!! $product->present()->content !!}

                <ul class="list-inline shop-product-prices margin-bottom-30">
                    <li class="shop-red">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</li>
                    {{--<li class="line-through">$70.00</li>--}}
                    <li><small class="shop-bg-red time-day-left">4 days left</small></li>
                </ul><!--/end shop product prices-->

                {{--<h3 class="shop-product-title">Size</h3>--}}
                {{--<ul class="list-inline product-size margin-bottom-30">--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="size-1" name="size">--}}
                        {{--<label for="size-1">S</label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="size-2" name="size">--}}
                        {{--<label for="size-2">M</label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="size-3" name="size" checked>--}}
                        {{--<label for="size-3">L</label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="size-4" name="size">--}}
                        {{--<label for="size-4">XL</label>--}}
                    {{--</li>--}}
                {{--</ul><!--/end product size-->--}}

                {{--<h3 class="shop-product-title">Color</h3>--}}
                {{--<ul class="list-inline product-color margin-bottom-30">--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="color-1" name="color">--}}
                        {{--<label class="color-one" for="color-1"></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="color-2" name="color" checked>--}}
                        {{--<label class="color-two" for="color-2"></label>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<input type="radio" id="color-3" name="color">--}}
                        {{--<label class="color-three" for="color-3"></label>--}}
                    {{--</li>--}}
                {{--</ul><!--/end product color-->--}}

                <h3 class="shop-product-title">Quantity</h3>
                <div class="margin-bottom-40">
                    <form name="f1" class="product-quantity sm-margin-bottom-20">
                        <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
                        <input type='text' class="quantity-field" name='qty' value="1" id='qty'/>
                        <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                    </form>
                    <button type="button" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>
                </div><!--/end product quantity-->

                {{--<ul class="list-inline add-to-wishlist add-to-wishlist-brd">--}}
                    {{--<li class="wishlist-in">--}}
                        {{--<i class="fa fa-heart"></i>--}}
                        {{--<a href="#">Add to Wishlist</a>--}}
                    {{--</li>--}}
                    {{--<li class="compare-in">--}}
                        {{--<i class="fa fa-exchange"></i>--}}
                        {{--<a href="#">Add to Compare</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                <p class="wishlist-category"><strong>Categories:</strong> {!! $product->present()->categories !!}</p>
            </div>
        </div><!--/end row-->
    </div>
</div>
