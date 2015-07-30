@extends('unify::unify-email')


@section('content')
    @include('unify::emails.newsletter.flat.discount')

    @include('unify::emails.newsletter.flat.left-picture')

    @include('unify::emails.newsletter.flat.right-picture')

    @include('unify::emails.newsletter.flat.middle-picture')

    @include('unify::emails.newsletter.flat.two-texts')

    @include('unify::emails.newsletter.flat.support')
@stop