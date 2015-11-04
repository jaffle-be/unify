<div class="row margin-bottom-5">
    <div class="col-sm-4 result-category">
        <h2>Men</h2>
        <small class="shop-bg-red badge-results">45 Results</small>
    </div>
    <div class="col-sm-8">
        <ul class="list-inline clear-both">
            <li class="grid-list-icons">
                {{--null is needed for optional brand--}}
                <a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['view' => 'list'])) }}"><i class="fa fa-th-list"></i></a>
                <a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['view' => 'grid'])) }}"><i class="fa fa-th"></i></a>
            </li>
            <li class="sort-list-btn">
                <h3>Sort By :</h3>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Popularity <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['sort' => 'price'])) }}">All</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['sort' => 'sales'])) }}">Best Sales</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['sort' => 'newest'])) }}">Top Last Week Sales</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['sort' => 'promotion'])) }}">New Arrived</a></li>
                    </ul>
                </div>
            </li>
            <li class="sort-list-btn">
                <h3>Show :</h3>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        {{ $filters['count'] }} <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['count' => 100])) }}">100</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['count' => 50])) }}">50</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['count' => 20])) }}">20</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['count' => 10])) }}">10</a></li>
                        <li><a href="{{ store_route('store.shop.category', [$category->translate(), null], array_merge(Request::all(), ['count' => 5])) }}">5</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>