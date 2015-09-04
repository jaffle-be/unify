<div class="container content-sm">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
        <h2>{{ Theme::setting('widgetsRecentPostsTitle') }}</h2>
        <span class="bordered-icon"><i class="fa fa-th-large"></i></span>

        <p>{{ Theme::setting('widgetsRecentPostsIntro') }}</p>
    </div>
    <!--/Headline Center V2-->

    <div class="row">
        @foreach($latest as $post)
            <div class="col-sm-4">
                <div class="thumbnails-v1">
                    <div class="thumbnail-img">
                        <a href="{{ route('store.blog.show', [$post]) }}">
                            <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h3><a href="{{ route('store.blog.show', [$post]) }}">{{ $post->title }}</a></h3>

                        <p>{{ $post->extract }}</p>

                        <p>
                            <a class="read-more" href="{{ route('store.blog.show', [$post]) }}">{{ Lang::get('Unify::front.read-more') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>