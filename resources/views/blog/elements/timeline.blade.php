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
                                    <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                                        <img class="img-responsive" alt="" src="{{ asset($image->thumbnail(1140)) }}">
                                    </a>

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
                <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                    <img class="img-responsive" src="{{ asset($post->thumbnail(1140)) }}" alt="">
                </a>
            @endif
        </div>
        <div class="timeline-body">
            <h2 class="font-light"><a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a></h2>

            <p>{!!  $post->extract !!}</p>
            <a class="btn-u btn-u-sm" href="{{ route('store.blog.show', [$post->translate()]) }}">Read More</a>
        </div>
        <div class="timeline-footer">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-clock-o"></i> {{ $post->publish_at->format('d M, Y') }}</li>
                <li><i class="fa fa-tag"></i> {!!  $post->tags->format() !!}</li>
                <li><a href="{{ route('store.team.show',[$post->user]) }}"><i class="fa fa-pencil"></i> {{ $post->user->name }}</a></li>
            </ul>
        </div>
    </div>
</li>