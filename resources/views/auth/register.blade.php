@extends('Unify::Unify')

@section('title', Lang::get('Unify::front.register'))

@section('styles-content')
    <link rel="stylesheet" href="{{ asset('/assets/css/pages/page_log_reg_v1.css') }}">
@stop

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page" action="{{ route('store.auth.signup.store') }}" method="POST">

                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    @if(isset($invitation))

                        <input name="invitation" type="hidden" value="{{ $invitation->id }}"/>

                    @endif

                    <div class="reg-header">
                        <h2>{{ Lang::get('Unify::users.general.register') }}</h2>

                        <p>{!! Lang::get('Unify::users.general.already-signed-up', ['url' => route('store.auth.signin.index')]) !!}</p>
                    </div>

                    <label>{{ Lang::get('Unify::users.general.email') }} <span class="color-red">*</span></label>
                    <input name="email" id="email" value="{{Input::old('email') }}" type="text" class="form-control margin-bottom-20">

                    @if($errors->has('email'))
                        <p class="alert alert-danger">
                            {!! $errors->first('email') !!}
                        </p>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="password">{{ Lang::get('Unify::users.general.password') }} <span class="color-red">*</span></label>
                            <input name="password" id="password" type="password" class="form-control margin-bottom-20">

                            @if($errors->has('password'))
                                <p class="alert alert-danger">
                                    {!! $errors->first('password') !!}
                                </p>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label for="password_confirmation">{{ Lang::get('Unify::users.general.password_confirmation') }} <span class="color-red">*</span></label>
                            <input name="password_confirmation" id="password_confirmation" type="password" class="form-control margin-bottom-20">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn-lg btn-u" type="submit">{{ Lang::get('Unify::users.general.register') }}</button>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a class="btn-lg btn-u" href="{{ route('store.auth.signin.index') }}">{{ Lang::get('Unify::users.general.back') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop