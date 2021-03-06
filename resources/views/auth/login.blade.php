@extends('Unify::unify')
<!-- CSS Page Style -->

@section('title', Lang::get('Unify::front.login'))

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page" action="{{ store_route('store.auth.signin.store') }}" method="POST">

                    <input value="{{csrf_token()}}" name="_token" type="hidden"/>

                    <div class="reg-header">
                        <h2>{{ Lang::get('Unify::front.login') }}</h2>
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

                    <div class="row">
                        <div class="col-md-6 checkbox">
                            <label><input type="checkbox" name="remember_me" value="1" {{Input::old('remember_me') ? 'checked': ''}}>{{ Lang::get('Unify::front.remember-me') }}
                            </label>
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit">{{ Lang::get('Unify::front.login') }}</button>
                        </div>
                    </div>

                    @if($errors->has('reason'))
                        <p class="alert alert-danger">
                            {!! $errors->first('reason') !!}
                        </p>
                    @endif

                    @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                    @endif

                    <hr>

                    <h4>{{ Lang::get('Unify::front.forgot-password') }}</h4>

                    <p>
                        {!! Lang::get('Unify::front.forgot-password-text', ['url' => store_route('store.auth.forgot-password.index')]) !!}
                    </p>
                </form>
            </div>
        </div>
        <!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop