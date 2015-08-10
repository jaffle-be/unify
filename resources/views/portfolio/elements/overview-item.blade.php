<? $size = isset($size) ? $size : 1280 ?>

<div class="cbp-item {{ implode(' ', $project->tags->lists('cubeportfolio')->toArray()) }}">
    <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
            <img src="{{ asset($project->thumbnail($size)) }}" alt="">
        </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                    <ul class="link-captions">
                        <li><a href="{{ route('store.portfolio.show', [$project->id]) }}"><i class="rounded-x fa fa-link"></i></a>
                        </li>
                        <li>
                            <a href="{{ asset($project->thumbnail($size)) }}" class="cbp-lightbox" data-title="Design Object"><i class="rounded-x fa fa-search"></i></a>
                        </li>
                    </ul>
                    <div class="cbp-l-grid-agency-title">{{ $project->title }}</div>
                    <div class="cbp-l-grid-agency-desc">Web Design</div>
                </div>
            </div>
        </div>
    </div>
</div>