<!-- News v3 -->
<div class="row margin-bottom-20">
    <div class="col-sm-5 sm-margin-bottom-20">

        @if($counter % 3 == 0)

            <div class="carousel slide" data-ride="carousel" id="blog-carousel{{$counter}}">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <? $imgCounter = 0; ?>
                    @foreach($post->images as $image)
                        @if($img = $image->sizes->first())
                            <li class="rounded-x {{ $imgCounter == 0 ? 'active' : '' }}" data-target="#blog-carousel{{$counter}}" data-slide-to="{{ $imgCounter }}"></li>
                            <? $imgCounter++ ?>
                        @endif
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <? $imgCounter = 0 ?>
                    @foreach($post->images as $image)

                        @if($img = $image->sizes->first())

                            <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                                <a href="{{ route('store.blog.show', [$post]) }}">
                                    <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(340)) }}">
                                </a>

                                {{--<div class="carousel-caption">
                                    <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                                </div>--}}
                            </div>
                            <? $imgCounter++ ?>
                        @endif

                    @endforeach
                </div>
            </div>

        @else
            <a href="{{ route('store.blog.show', [$post]) }}">
                <img class="img-responsive" src="{{ asset($post->thumbnail(340)) }}" alt="">
            </a>

        @endif
    </div>

    <div class="col-sm-7 news-v3">
        <div class="news-v3-in-sm no-padding">
            <ul class="list-inline posted-info">
                <li>{{ Lang::get('blog::post-by') }} <a href="">{{ $post->user->name }}</a></li>
                @foreach($post->tags as $tag)
                    <li>In <a href="#">{{ $tag->name }}</a></li>
                @endforeach
                <li>Posted {{ $post->published_at->format('d M, Y') }}</li>
            </ul>
            <h2><a href="{{ route('store.blog.show', [$post]) }}">{{$post->title}}</a></h2>

            <p>{{ $post->extract }}</p>
            <ul class="post-shares">
                <li>
                    <a href="#">
                        <i class="rounded-x icon-speech"></i>
                        <span>5</span>
                    </a>
                </li>
                <li><a href="#"><i class="rounded-x icon-share"></i></a></li>
                <li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--/end row-->
<!-- End News v3 -->

<div class="clearfix margin-bottom-20">
    <hr>
</div>