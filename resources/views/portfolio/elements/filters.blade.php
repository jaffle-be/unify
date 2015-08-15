<div class="content-xs">
    <div id="filters-container" class="cbp-l-filters-text content-xs">

        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All</div>
        |
        <? $counter = 1; ?>
        @foreach($tags as $tag)

            <div data-filter=".{{ $tag->cubeportfolio }}" class="cbp-filter-item"> {{ $tag->name }}</div>

            @if($counter != $tags->count())
            |
            @endif
            <? $counter++ ?>
        @endforeach

    </div>
    <!--/end Filters Container-->
</div>