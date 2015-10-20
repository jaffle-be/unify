<!-- Blog Posts -->
<div class="news-v3 margin-bottom-60">
    @if($counter % 3 == 0)
        <div class="carousel slide carousel-v1" id="post-carousel{{ $post->id }}">
            <ol class="carousel-indicators">
                <? $imgCounter = 0; ?>
                @foreach($post->images as $image)
                    @if($img = $image->sizes->first())
                        <li class="rounded-x {{ $imgCounter == 0 ? 'active' : '' }}" data-target="#post-carousel{{ $post->id }}" data-slide-to="{{ $imgCounter }}"></li>
                        <? $imgCounter++ ?>
                    @endif

                @endforeach
            </ol>
            <div class="carousel-inner">

                <? $imgCounter = 0 ?>
                @foreach($post->images as $image)

                    @if($img = $image->sizes->first())

                        <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                            <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">
                                <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(1140)) }}">
                            </a>

                        </div>
                        <? $imgCounter++ ?>
                    @endif

                @endforeach

            </div>

            <div class="carousel-arrow">
                <a data-slide="prev" href="#post-carousel{{ $post->id }}" class="left carousel-control">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a data-slide="next" href="#post-carousel{{ $post->id }}" class="right carousel-control">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    @else
        <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">
            <img class="img-responsive full-width" src="{{ asset($post->thumbnail(1140)) }}" alt="">
        </a>
    @endif

    <div class="news-v3-in">
        <ul class="list-inline posted-info">
            <li>{{ Lang::get('Unify::front.post-by') }} <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!!  $post->tags->format(null, ', ') !!}</li>
            <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
        </ul>


        <h2><a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></h2>

        <p>{!!  $post->present()->extract !!}</p>

        <ul class="post-shares">
            <li>
                <a href="#">
                    <i class="rounded-x icon-speech"></i>
                    <span>26</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-share"></i>
                    <span>98</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="rounded-x icon-heart"></i>
                    <span>30</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Blog Posts -->