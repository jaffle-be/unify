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
                                <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">
                                    <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(460)) }}">
                                </a>

                            </div>
                            <? $imgCounter++ ?>
                        @endif

                    @endforeach
                </div>
            </div>

        @else
            <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">
                <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
            </a>

        @endif
    </div>

    <div class="col-sm-7 news-v3">
        <div class="news-v3-in-sm no-padding">
            <ul class="list-inline posted-info">
                <li>{{ Lang::get('Unify::front.post-by') }} <a href="{{ store_route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
                <li>In {!!  $post->tags->format(null, ', ') !!}</li>
                <li>Posted {{ $post->publish_at->format('d M, Y') }}</li>
            </ul>
            <h2><a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{$post->title}}</a></h2>

            <p>{!!  $post->present()->extract !!}</p>
        </div>
    </div>
</div>
<!--/end row-->
<!-- End News v3 -->

<div class="clearfix margin-bottom-20">
    <hr>
</div>