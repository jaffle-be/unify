<!-- News v3 -->
<div class="row margin-bottom-20">
    <div class="col-sm-5 sm-margin-bottom-20">
        <a href="{{ route('store.uri.show', [$post->translate()->uri]) }}">
            <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
        </a>
    </div>
    <div class="col-sm-7">
        <div class="news-v3">
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
