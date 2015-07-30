<div class="cbp-item graphic">
    <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
            <img src="{{ $image ? asset($image->path) : '' }}" alt="">
        </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                    <ul class="link-captions">
                        <li><a href="{{ route('store.portfolio.show', [$project->id]) }}"><i class="rounded-x fa fa-link"></i></a>
                        </li>
                        <li>
                            <a href="{{ $image ? asset($image->path) : '' }}" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a>
                        </li>
                    </ul>
                    <div class="cbp-l-grid-agency-title">{{ $project->title }}</div>
                    <div class="cbp-l-grid-agency-desc">Web Design</div>
                </div>
            </div>
        </div>
    </div>
</div>