<!--Blog Post-->
<div class="row blog blog-medium margin-bottom-40">
    <div class="col-md-5">
        @if($counter % 3 == 0)
            <div class="carousel slide carousel-v1" id="blog-carousel{{$counter}}">
                <div class="carousel-inner">
                    <? $imgCounter = 0 ?>
                    @foreach($post->images as $image)

                        @if($img = $image->sizes->first())

                            <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                                <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                                    <img class="img-responsive full-width" alt="" src="{{ asset($image->thumbnail(460)) }}">
                                </a>

                            </div>
                            <? $imgCounter++ ?>
                        @endif
                    @endforeach
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#blog-carousel{{$counter}}" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#blog-carousel{{$counter}}" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        @else
            
            <a href="{{ route('store.blog.show', [$post->translate()]) }}">
                <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
            </a>

        @endif

    </div>
    <div class="col-md-7">
        <h2><a href="{{ route('store.blog.show', [$post->translate()]) }}">{{ $post->title }}</a></h2>
        <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
            <li><i class="fa fa-tags"></i> {!!  $post->tags->format() !!}</li>
            <li>{{ Lang::get('Unify::front.post-by') }} <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
        </ul>
        <p>{!!  $post->extract !!}</p>

        <p><a class="btn-u btn-u-sm" href="{{ route('store.blog.show', [$post->translate()]) }}">Read More
                <i class="fa fa-angle-double-right margin-left-5"></i></a></p>
    </div>
</div>
<!--End Blog Post-->

<hr class="margin-bottom-40">