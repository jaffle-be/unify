@extends('theme.unify::unify-email')


@section('content')
    @include('theme.unify::emails.newsletter.flat.discount')

    @include('theme.unify::emails.newsletter.flat.left-picture')

    @include('theme.unify::emails.newsletter.flat.right-picture')

    @include('theme.unify::emails.newsletter.flat.middle-picture')

    @include('theme.unify::emails.newsletter.flat.two-texts')

    @include('theme.unify::emails.newsletter.flat.support')
@stop