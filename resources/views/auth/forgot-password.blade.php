@extends('Unify::unify')
<!-- CSS Page Style -->

@section('title', Lang::get('Unify::front.forgot-password'))

@section('styles-content')
    <link rel="stylesheet" href="{{ '/assets/css/pages/page_log_reg_v1.css' }}">
@stop

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page" action="{{ route('store.auth.forgot-password.store') }}" method="post">

                    <input value="{{csrf_token()}}" name="_token" type="hidden"/>

                    <div class="reg-header">
                        <h2>{{ Lang::get('Unify::front.forgot-password') }}</h2>
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

                    <div class="row">

                        <div class="col-md-6">
                            <a class="pull-right btn-u btn-lg btn-default" href="{{ route('store.auth.signin.index') }}">{{ Lang::get('Unify::front.back') }}</a>
                        </div>

                        <div class="col-md-6 text-right">
                            <button class="btn-u btn-lg" type="submit">{{ Lang::get('Unify::front.submit') }}</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop