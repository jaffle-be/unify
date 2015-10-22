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
                        <a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">
                            <img class="img-responsive" src="{{ asset($post->thumbnail(460)) }}" alt="">
                        </a>
                    </div>
                    <div class="caption">
                        <h3><a href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{ $post->title }}</a></h3>

                        <p>{{ $post->present()->extract }}</p>

                        <p>
                            <a class="read-more" href="{{ store_route('store.uri.show', [$post->translate()->uri]) }}">{{ Lang::get('Unify::front.read-more') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>