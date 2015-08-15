<div class="container content-sm">
    <div class="text-center">
        <h2 class="title-v2 title-center">{{ Theme::setting('teamMemberPortfolioTitle') }}</h2>

        <p class="space-lg-hor">{{ Theme::setting('teamMemberPortfolioText') }}</p>
    </div>

    <!-- Cube Portfolio -->
    <div class="cube-portfolio container margin-bottom-20">
        <div class="margin-bottom-30">
            <div id="filters-container" class="cbp-l-filters-text">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All</div>
                |

                <? $counter = 1 ?>
                @foreach($tags as $tag)
                    @if($counter != count($tags))
                        <div data-filter=".{{ $tag->name }}" class="cbp-filter-item"> {{ $tag->name }} </div> |
                    @else
                        <div data-filter=".{{ $tag->name }}" class="cbp-filter-item"> {{ $tag->name }} </div>
                    @endif

                    <? $counter++ ?>
                @endforeach

                <? unset($counter) ?>
            </div>
            <!--/end Filters Container-->
        </div>

        <div id="grid-container" class="cbp-l-grid-gallery">

            @foreach($projects as $project)

                <div class="cbp-item {{ implode(' ', $project->tags->lists('name')->toArray()) }}">
                    <a href="{{ route('store.portfolio.show', [$project]) }}" class="cbp-caption"
                       data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ asset($project->thumbnail(380)) }}" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title">{{ $project->title }}</div>
                                    <div class="cbp-l-caption-desc">{{ implode(', ', $project->tags->lists('name')->toArray()) }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
        <!--/end Grid Container-->
    </div>
    <!-- End Cube Portfolio -->
</div>