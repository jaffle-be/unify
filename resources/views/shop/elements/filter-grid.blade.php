<div class="filter-results">

    <div class="row illustration-v2">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="product-img product-img-brd">
                    <a href="#"><img class="full-width img-responsive" src="{{ asset($product->thumbnail(340)) }}" alt=""></a>
                    <a class="product-review" href="{{ store_route('store.shop.product', [$product->translate()]) }}">Quick review</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-description product-description-brd margin-bottom-30">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price">
                                <a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a>
                            </h4>
                            <span class="gender">{{ $product->brand->name }}</span>
                            <span class="gender text-uppercase">{!! $product->present()->categories !!}</span>
                        </div>
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
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
</div><!--/end filter resilts-->

<div class="text-center">
    <ul class="pagination pagination-v2">
        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</div><!--/end pagination-->