<? $memberView = Theme::setting('teamDetail') ?>

@if(Theme::setting('layoutBreadcrumbs') == 'breadcrumbs-2' && $memberView == 'member-2')

@section('breadcrumb')
    {!! Breadcrumbs::render(['noImage' => true]) !!}
@stop

@endif

@include('Unify::team.' . $memberView)
