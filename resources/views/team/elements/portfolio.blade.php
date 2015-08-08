<div class="container content-sm">
    <div class="text-center">
        <h2 class="title-v2 title-center">LATEST PROJECTS</h2>
        <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p><br>
    </div>

    <!-- Cube Portfolio -->
    <div class="cube-portfolio container margin-bottom-20">
        <div class="margin-bottom-30">
            <div id="filters-container" class="cbp-l-filters-text">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
                <div data-filter=".illustration" class="cbp-filter-item"> Illustration </div> |
                <div data-filter=".web-design" class="cbp-filter-item"> Web Design </div> |
                <div data-filter=".graphic" class="cbp-filter-item"> Graphic </div> |
                <div data-filter=".logo" class="cbp-filter-item"> Logo </div>
            </div><!--/end Filters Container-->
        </div>

        <div id="grid-container" class="cbp-l-grid-gallery">

            @foreach($projects as $project)

                <div class="cbp-item illustration web-design">
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

        </div><!--/end Grid Container-->
    </div>
    <!-- End Cube Portfolio -->
</div>