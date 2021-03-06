<!--Blog Post-->
<div class="blog margin-bottom-40">
    @if($counter % 3 == 0)
        <div class="blog-img">
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                    <? $imgCounter = 0 ?>
                    @foreach($post->images as $image)

                        @if($img = $image->sizes->first())

                            <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                                <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">
                                    <img alt="" src="{{ asset($image->thumbnail(1140)) }}">
                                </a>
                            </div>
                            <? $imgCounter++ ?>
                        @endif

                    @endforeach
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="blog-img">
            <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">
                <img class="img-responsive" src="{{ asset($post->thumbnail(1140)) }}" alt="">
            </a>
        </div>
    @endif

    <h2><a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></h2>

    <div class="blog-post-tags">
        <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
            <li><i class="fa fa-pencil"></i> <a href="{{ store_route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
            {{--<li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>--}}
            <li><i class="fa fa-tags"></i>

                {!! $post->tags->format() !!}


            </li>
        </ul>
    </div>

    <p>{!!  $post->present()->extract !!}</p>

    <p><a class="btn-u btn-u-small" href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}"><i class="fa fa-plus"></i> Read More</a>
    </p>
</div>
<!--End Blog Post-->