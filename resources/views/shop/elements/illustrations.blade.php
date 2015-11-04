<div class="row illustration-v4 margin-bottom-40">
    @if(isset($top) && $top->count())
        <div class="col-md-4">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Top Rated</h2>
            </div>
            @foreach($top as $product)
            <div class="thumb-product">
                <img class="thumb-product-img img-responsive" src="{{ asset($product->thumbnail(150)) }}">

                <div class="thumb-product-in">
                    <h4><a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a></h4>
                    <span class="thumb-product-type">{{ $product->brand->name }}</span>
                    <span class="thumb-product-type">{!! $product->present()->categories !!}</span>
                </div>
                <ul class="list-inline overflow-h">
{{--                    <li class="thumb-product-price line-through">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</li>--}}
                    <li class="thumb-product-price">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</li>
                    <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a>
                        {{--<a href="#"><i class="fa fa-heart"></i></a></li>--}}
                </ul>
            </div>
            @endforeach
        </div>
    @endif

    @if(isset($bestsellers) && $bestsellers->count())
        <div class="col-md-4">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Best Sellers</h2>
            </div>
            @foreach($bestsellers as $product)
            <div class="thumb-product">
                <img class="thumb-product-img" src="{{ asset($product->thumbnail(150)) }}" alt="">

                <div class="thumb-product-in">
                    <h4><a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a></h4>
                    <span class="thumb-product-type">{{ $product->brand->name }}</span>
                    <span class="thumb-product-type">{!! $product->present()->categories !!}</span>
                </div>
                <ul class="list-inline overflow-h">
                    <li class="thumb-product-price">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</li>
                    <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a>
                        {{--<a href="#"><i class="fa fa-heart"></i></a></li>--}}
                </ul>
            </div>
            @endforeach
        </div>
    @endif

    @if(isset($sales) && $sales->count())
        <div class="col-md-4 padding">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>Sale Items</h2>
            </div>
            @foreach($sales as $product)
            <div class="thumb-product">
                <img class="thumb-product-img" src="{{ asset($product->thumbnail(150)) }}" alt="">

                <div class="thumb-product-in">
                    <h4><a href="{{ store_route('store.shop.product', [$product->translate()]) }}">{{ $product->name }}</a></h4>
                    <span class="thumb-product-type">{{ $product->brand->name }}</span>
                    <span class="thumb-product-type">{!! $product->present()->categories !!}</span>
                </div>
                <ul class="list-inline overflow-h">
                    {{--<li class="thumb-product-price line-through">$75.00</li>--}}
                    <li class="thumb-product-price">&euro;&nbsp;{{ $product->price ? $product->price->value : null }}</li>
                    <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a>
                        {{--<a href="#"><i class="fa fa-heart"></i></a></li>--}}
                </ul>
            </div>
            @endforeach
        </div>
    @endif
</div>