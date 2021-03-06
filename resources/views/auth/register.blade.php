@extends('Unify::unify')

@section('title', Lang::get('Unify::front.register'))

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page" action="{{ store_route('store.auth.signup.store') }}" method="POST">

                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    @if(isset($invitation))

                        <input name="invitation" type="hidden" value="{{ $invitation->id }}"/>

                    @endif

                    <div class="reg-header">
                        <h2>{{ Lang::get('Unify::front.register') }}</h2>

                        <p>{!! Lang::get('Unify::front.already-signed-up', ['url' => store_route('store.auth.signin.index')]) !!}</p>
                    </div>

                    <label>{{ Lang::get('Unify::front.email') }} <span class="color-red">*</span></label>
                    <input name="email" id="email" value="{{Input::old('email') }}" type="text" class="form-control margin-bottom-20">

                    @if($errors->has('email'))
                        <p class="alert alert-danger">
                            {!! $errors->first('email') !!}
                        </p>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="password">{{ Lang::get('Unify::front.password') }} <span class="color-red">*</span></label>
                            <input name="password" id="password" type="password" class="form-control margin-bottom-20">

                            @if($errors->has('password'))
                                <p class="alert alert-danger">
                                    {!! $errors->first('password') !!}
                                </p>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label for="password_confirmation">{{ Lang::get('Unify::front.password_confirmation') }} <span class="color-red">*</span></label>
                            <input name="password_confirmation" id="password_confirmation" type="password" class="form-control margin-bottom-20">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-6">
                            <a class="btn-lg btn-u" href="{{ store_route('store.auth.signin.index') }}">{{ Lang::get('Unify::front.back') }}</a>
                        </div>

                        <div class="col-lg-6  text-right">
                            <button class="btn-lg btn-u" type="submit">{{ Lang::get('Unify::front.register') }}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop