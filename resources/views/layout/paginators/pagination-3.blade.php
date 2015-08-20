<ul class="pager pager-v3 pager-md no-margin-bottom">
    @if($pager->currentPage() != 1)
        <li class="previous"><a href="{{ $pager->previousPageUrl() }}">&larr;</a></li>
    @endif

    <li class="page-amount">{{ $pager->currentPage() }} {{ Lang::get('Unify::front.pagination.of') }} {{ $pager->lastPage() }}</li>

    @if($pager->hasMorePages())
        <li class="next"><a href="{{ $pager->nextPageUrl() }}">&rarr;</a></li>
    @endif
</ul>