<? $inverted = $counter % 2 != 0 ?>


<li class="{{ $inverted ? 'timeline-inverted' : '' }}">
    <div class="timeline-badge primary"><i class="fa fa-dot-circle-o{{ $inverted ? 'invert' : '' }}"></i></div>
    <div class="timeline-panel">
        <div class="timeline-heading">

            @if($counter %3 == 0)

                <div class="carousel slide carousel-v1" id="timeline-carousel{{$counter}}">
                    <div class="carousel-inner">
                        <? $imgCounter = 0 ?>
                        @foreach($post->images as $image)

                            @if($img = $image->sizes->first())

                                <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                                    <a href="{{ route('store.blog.show', [$post]) }}">
                                        <img class="img-responsive" alt="" src="{{ asset($image->thumbnail(850)) }}">
                                    </a>

                                    {{--<div class="carousel-caption">
                                        <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                                    </div>--}}
                                </div>
                                <? $imgCounter++ ?>
                            @endif

                        @endforeach
                    </div>

                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#timeline-carousel{{$counter}}" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#timeline-carousel{{$counter}}" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>


            @else
                <a href="{{ route('store.blog.show', [$post]) }}">
                    <img class="img-responsive" src="{{ asset($post->thumbnail(850)) }}" alt="">
                </a>
            @endif
        </div>
        <div class="timeline-body">
            <h2 class="font-light"><a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a></h2>

            <p>{{ $post->extract }}</p>
            <a class="btn-u btn-u-sm" href="{{ route('store.blog.show', [$post]) }}">Read More</a>
        </div>
        <div class="timeline-footer">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-clock-o"></i> {{ $post->publish_at->format('d M, Y') }}</li>
                <li><i class="fa fa-tag"></i> {{ implode(', ', $post->tags->lists('name')->toArray()) }}</li>
            </ul>
            <a class="likes" href="#"><i class="fa fa-pencil"></i> <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></a>
        </div>
    </div>
</li>