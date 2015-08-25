<!--Blog Post-->
<div class="blog margin-bottom-40">
    <h2>
        <a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a>
    </h2>

    <div class="blog-post-tags">

        <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i> {{ $post->publish_at->format('d M, Y') }}</li>
            <li><i class="fa fa-pencil"></i> <a href="{{ route('store.team.show',[$post->user]) }}">{{ $post->user->name }}</a></li>
            <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>
        </ul>

        <ul class="list-unstyled list-inline blog-tags">
            <li>
                <i class="fa fa-tags"></i>
                {!!  $post->tags->format() !!}
            </li>
        </ul>
    </div>

    @if($counter % 3 == 0)

        <div class="blog-img">
            <div class="carousel slide carousel-v1" id="myCarousel">
                <div class="carousel-inner">
                    <? $imgCounter = 0 ?>

                    @foreach($post->images as $image)

                        <div class="item {{ $imgCounter == 0 ? 'active' : '' }}">
                            <a href="{{ route('store.blog.show', [$post]) }}">
                                <img alt="" src="{{ $image->thumbnail(1140) }}">
                            </a>

                            {{--<div class="carousel-caption">
                                <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                            </div>--}}
                        </div>
                            <? $imgCounter++ ?>

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
            <a href="{{ route('store.blog.show', [$post]) }}">
                <img class="img-responsive" src="{{ $post->thumbnail(1140) }}" alt="">
            </a>
        </div>

    @endif


    <p>{{ $post->extract }}</p>

    <p>
        <a class="btn-u btn-u-small" href="{{ route('store.blog.show', [$post]) }}"><i class="fa fa-plus-sign"></i> Read More</a>
    </p>
</div>
<!--End Blog Post-->

{{--

<!--Blog Post-->
<div class="blog margin-bottom-40">
    <h2>
        <a href="{{ route('store.blog.show', [$post]) }}">Template comes with developer friendly and easy to customizable code</a>
    </h2>

    <div class="blog-post-tags">
        <ul class="list-unstyled list-inline blog-info">
            <li><i class="fa fa-calendar"></i> February 02, 2013</li>
            <li><i class="fa fa-pencil"></i> Diana Anderson</li>
            <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>
        </ul>
        <ul class="list-unstyled list-inline blog-tags">
            <li>
                <i class="fa fa-tags"></i>
                <a href="#">Technology</a>
                <a href="#">Education</a>
                <a href="#">Internet</a>
                <a href="#">Media</a>
            </li>
        </ul>
    </div>
    <div class="blog-img">
        <div class="responsive-video">
            <iframe src="http://player.vimeo.com/video/47911018" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
    </div>
    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

    <p>
        <a class="btn-u btn-u-small" href="{{ route('store.blog.show', [$post]) }}"><i class="fa fa-plus-sign"></i> Read More</a>
    </p>
</div>
<!--End Blog Post-->--}}
