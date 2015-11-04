@if(isset($featured) && $featured->count())

    <div class="heading heading-v1 margin-bottom-25">
        <h2>Featured products</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
    </div>

    <!--=== Illustration v2 ===-->
    <div class="illustration-v2 margin-bottom-60">
        <ul class="list-inline owl-slider">
            @foreach($featured as $product)

                <li class="item">
                    <div class="product-img">
                        <a href="{{ store_route('store.shop.product', [$product->translate()]) }}" alt="">
                            <img class="img-responsive" src="{{ asset($product->thumbnail(340)) }}">
                        </a>
                        <a class="product-review" href="{{ store_route('store.shop.product', [$product->translate()]) }}">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div>
                                <h4 class="title-price">
                                    <a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a></h4>
                                <span class="gender text-uppercase">{{ $product->brand->name }}</span>
                                <span class="gender">{!! $product->present()->categories !!}</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">&euro;&nbsp;{{ $product->price ? $product->price->value : null}}</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                            {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                            {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                            {{--<li><i class="rating fa fa-star"></i></li>--}}
                            {{--<li><i class="rating fa fa-star"></i></li>--}}
                            {{--<li class="like-icon">--}}
                                {{--<a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!--=== End Illustration v2 ===-->
@endif