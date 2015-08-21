<div class="cbp-item">
    <div class="cbp-caption margin-bottom-20">
        <div class="cbp-caption-defaultWrap">
            <img src="{{ asset($project->thumbnail()) }}" alt="">
        </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                    <ul class="link-captions no-bottom-space">
                        <li><a href="{{ route('store.portfolio.show', [$project->id]) }}"><i class="rounded-x fa fa-link"></i></a>
                        </li>
                        <li>
                            <a href="{{ asset($project->thumbnail()) }}" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-title-dark">
        <div class="cbp-l-grid-agency-title">{{ $project->title }}</div>
        @if($project->tags && $project->tags->count())
        <div class="cbp-l-grid-agency-desc">{!! $project->tags->format() !!}</div>
        @endif
    </div>
</div>