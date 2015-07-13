@extends('theme.unify::unify-email')


@section('content')

    @include('theme.unify::emails.newsletter.corporate.blocks')

    @include('theme.unify::emails.newsletter.corporate.two-image-block')

    <div style="height:15px">&nbsp;</div><!-- divider -->

    @include('theme.unify::emails.newsletter.corporate.discount')

    @include('theme.unify::emails.newsletter.corporate.three-image-block')

    @include('theme.unify::emails.newsletter.corporate.weekly-prize')
@stop