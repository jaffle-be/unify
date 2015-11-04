@if(isset($latest) && $latest->count())
<div class="heading heading-v1 margin-bottom-40">
    <h2>Latest products</h2>
</div>

<!--=== Illustration v2 ===-->
<div class="row illustration-v2">
    @foreach($latest as $product)
        <div class="col-md-3 col-sm-6 md-margin-bottom-30">
            <div class="product-img">
                <a href="{{ store_route('store.shop.product', [$product->translate()]) }}" alt="">
                    <img src="{{ asset($product->thumbnail(340)) }}" class="img-responsive">
                </a>
                <a class="product-review" href="{{ store_route('store.shop.product', [$product->translate()]) }}">Quick review</a>
                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-description product-description-brd">
                <div class="overflow-h margin-bottom-5">
                    <div class="pull-left">
                        <h4 class="title-price"><a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a></h4>
                        <span class="gender text-uppercase">{{ $product->brand->name }}</span>
                        <span class="gender">{!! $product->present()->categories !!}</span>
                    </div>
                    <div class="product-price">
                        <span class="title-price">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</span>
                    </div>
                </div>
                <ul class="list-inline product-ratings">
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating-selected fa fa-star"></i></li>--}}
                    {{--<li><i class="rating fa fa-star"></i></li>--}}
                    {{--<li><i class="rating fa fa-star"></i></li>--}}
                    {{--<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>--}}
                </ul>
            </div>
        </div>
    @endforeach
</div>
<!--=== End Illustration v2 ===-->
@endif