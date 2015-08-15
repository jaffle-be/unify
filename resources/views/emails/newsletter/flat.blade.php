@extends('Unify::unify-email')


@section('content')
    @include('Unify::emails.newsletter.flat.discount')

    @include('Unify::emails.newsletter.flat.left-picture')

    @include('Unify::emails.newsletter.flat.right-picture')

    @include('Unify::emails.newsletter.flat.middle-picture')

    @include('Unify::emails.newsletter.flat.two-texts')

    @include('Unify::emails.newsletter.flat.support')
@stop