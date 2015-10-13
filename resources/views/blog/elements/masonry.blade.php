@if($counter % 7 == 0)


    <?
    $color = unify_color('bg', true, true);
    ?>

    <div class="grid-boxes-in grid-boxes-qoute">
        <div class="grid-boxes-caption grid-boxes-quote {{ $color }}">
            <p><a href="{{ route('store.blog.show', [$post->translate()]) }}">{!! $post->present()->extract(130) !!}</a></p>
            <span>- <a class="{{ $color }}" href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a> -</span>
        </div>
    </div>

@else

    <div class="grid-boxes-in">

        @if($counter % 4 == 0)

            <div id="masonry-carousel{{$counter}}" class="carousel slide carousel-v1">
                <div class="carousel-inner">

                    <? $imgCounter = 0 ?>
                    @foreach($post->images as $image)

                        @if($img = $image->sizes->first())

                            <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                                <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                                    <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(1140)) }}">
                                </a>

                            </div>
                            <? $imgCounter++ ?>
                        @endif

                    @endforeach

                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#masonry-carousel{{$counter}}" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#masonry-carousel{{$counter}}" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>

        @else

            <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
            </a>
        @endif

        <div class="grid-boxes-caption">
            <h3><a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a></h3>
            <ul class="list-inline grid-boxes-news">
                <li><span>{{ Lang::get('Unify::front.post-by') }}</span> <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>|</li>
                <li><i class="fa fa-clock-o"></i> {{ $post->publish_at->format('d M, Y') }}</li>
                <li>|</li>
                <li><a href="#"><i class="fa fa-tag"></i> {!!  $post->tags->format() !!}</a>
                </li>
            </ul>
            <p>{!!  $post->present()->extract !!}</p>
        </div>
    </div>

@endif