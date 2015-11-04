@if(($message = Session::get('newsletter.subscription')) || ($errors->has('email') && Input::old('_form') == 'newsletter.subscription'))

@section('flash')

    @if($message == 'success' || $message == 'duplicate')
        <div class="alert alert-success text-center" style="margin-bottom: 0">{{ Lang::get('Unify::newsletter.subscription.success') }}</div>
    @else
        <div class="alert alert-danger text-center" style="margin-bottom: 0">
            {{ Lang::get('Unify::newsletter.subscription.failed') }}

            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>
    @endif

@stop

@endif