<!-- Pager v2 -->

<ul class="pager pager-v2 pager-md no-margin">
    @if($pager->currentPage() != 1)
        <li class="previous">
            <a href="{{ $pager->previousPageUrl() }}">&larr; {{ Lang::get('Unify::pager.previous') }}</a></li>
    @endif

    <li class="page-amount">{{ $pager->currentPage() }} {{ Lang::get('Unify::pagination.of') }} {{ $pager->lastPage() }}</li>

    @if($pager->hasMorePages())
        <li class="next"><a href="{{$pager->nextPageUrl()}}">{{ Lang::get('Unify::pager.next') }} &rarr;</a></li>
    @endif
</ul>
<!-- End Pager v2 -->