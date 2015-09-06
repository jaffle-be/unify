@extends('Unify::unify')
<!-- CSS Page Style -->

@section('title', Lang::get('Unify::front.reset-password'))

@section('styles-content')
    <link rel="stylesheet" href="{{ '/assets/css/pages/page_log_reg_v1.css' }}">
@stop

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page" action="{{ route('store.auth.reset-password.update', [$token]) }}" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" name="_method" value="put"/>

                    <div class="reg-header">
                        <h2>{{ Lang::get('Unify::front.reset-password') }}</h2>
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="email" id="email" type="text" placeholder="{{ Lang::get('Unify::front.email') }}" value="{{ Input::old('email') }}" class="form-control">
                    </div>

                    @if($errors->has('email'))
                        <p class="alert alert-danger">
                            {!! $errors->first('email') !!}
                        </p>
                    @endif

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input name="password" id="password" type="password" placeholder="{{ Lang::get('Unify::front.password') }}" class="form-control">
                    </div>

                    @if($errors->has('password'))
                        <p class="alert alert-danger">
                            {!! $errors->first('password') !!}
                        </p>
                    @endif

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input name="password_confirmation" id="password_confirmation" type="password" placeholder="{{ Lang::get('Unify::front.password_confirmation') }}" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left">
                            <a class="btn-u" href="{{ route('store.auth.signin.index') }}">{{ Lang::get('Unify::front.back') }}</a>
                        </div>

                        <div class="col-md-6 text-right">
                            <button class="btn-u" type="submit">{{ Lang::get('Unify::front.submit') }}</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop