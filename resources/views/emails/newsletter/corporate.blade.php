@extends('unify::unify-email')


@section('content')

    @include('unify::emails.newsletter.corporate.blocks')

    @include('unify::emails.newsletter.corporate.two-image-block')

    <div style="height:15px">&nbsp;</div><!-- divider -->

    @include('unify::emails.newsletter.corporate.discount')

    @include('unify::emails.newsletter.corporate.three-image-block')

    @include('unify::emails.newsletter.corporate.weekly-prize')
@stop