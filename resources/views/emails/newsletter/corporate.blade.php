@extends('Unify::unify-email')


@section('content')

    @include('Unify::emails.newsletter.corporate.blocks')

    @include('Unify::emails.newsletter.corporate.two-image-block')

    <div style="height:15px">&nbsp;</div><!-- divider -->

    @include('Unify::emails.newsletter.corporate.discount')

    @include('Unify::emails.newsletter.corporate.three-image-block')

    @include('Unify::emails.newsletter.corporate.weekly-prize')
@stop