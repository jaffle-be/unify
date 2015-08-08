<? $memberView = Theme::setting('teamDetail') ?>

@if(Theme::setting('breadcrumbs') == 'breadcrumbs-2' && $memberView == 'member-3')

@section('breadcrumb')
    {!! Breadcrumbs::render(['noImage' => true]) !!}
@stop

@endif

@include('Unify::team.' . $memberView)
