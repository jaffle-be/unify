@extends('Unify::unify-shop')

@section('title', Lang::get('Unify::front.register'))

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/log-reg-v3.min.css') }}">
@stop

@section('content')
    <!--=== Registre ===-->
    <div class="log-reg-v3 content-md margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to Unify</h2>

                    <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p>
                    <br>

                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>20,039</span>
                                <small>Products</small>
                            </div>
                        </div>
                        <div class="col-sm-4 md-margin-bottom-20">
                            <div class="site-statistics">
                                <span>54,283</span>
                                <small>Reviews</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="site-statistics">
                                <span>376k</span>
                                <small>Sale</small>
                            </div>
                        </div>
                    </div>
                    <div class="members-number">
                        <h3>Join more than <span class="shop-green">13,000</span> members worldwide</h3>
                        <img class="img-responsive" src="{{ theme_asset('img/map.png') }}" alt="">
                    </div>
                </div>

                <div class="col-md-5">
                    <form id="sky-form4" class="log-reg-block sky-form">
                        <h2>Create New Account</h2>

                        <div class="login-input reg-input">
                            <div class="row">
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="firstname" placeholder="First name" class="form-control">
                                        </label>
                                    </section>
                                </div>
                                <div class="col-sm-6">
                                    <section>
                                        <label class="input">
                                            <input type="text" name="lastname" placeholder="Last name" class="form-control">
                                        </label>
                                    </section>
                                </div>
                            </div>
                            <label class="select margin-bottom-15">
                                <select name="gender" class="form-control">
                                    <option value="0" selected disabled>Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                </select>
                            </label>

                            <div class="row margin-bottom-10">
                                <div class="col-xs-6">
                                    <label class="select">
                                        <select name="month" class="form-control">
                                            <option disabled="" selected="" value="0">Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="day" placeholder="Day" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" name="year" placeholder="Year" class="form-control">
                                </div>
                            </div>
                            <section>
                                <label class="input">
                                    <input type="text" name="username" placeholder="Username" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="email" name="email" placeholder="Email address" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="password" placeholder="Password" id="password" class="form-control">
                                </label>
                            </section>
                            <section>
                                <label class="input">
                                    <input type="password" name="passwordConfirm" placeholder="Confirm password" class="form-control">
                                </label>
                            </section>
                        </div>

                        <label class="checkbox margin-bottom-10">
                            <input type="checkbox" name="checkbox"/>
                            <i></i>
                            Subscribe to our newsletter to get the latest offers
                        </label>
                        <label class="checkbox margin-bottom-20">
                            <input type="checkbox" name="checkbox"/>
                            <i></i>
                            I have read agreed with the <a href="#">terms &amp; conditions</a>
                        </label>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Create Account</button>
                    </form>

                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Already you have an account? <a href="{{ store_route('store.shop.login') }}">Sign In</a></p>
                </div>
            </div>
            <!--/end row-->
        </div>
        <!--/end container-->
    </div>
    <!--=== End Registre ===-->

    <!--=== Shop Subscribe ===-->
    @include('Unify::layout.widgets.subscribe')
    <!--=== End Shop Subscribe ===-->

    @stop

            <!-- JS Implementing Plugins -->
@section('scripts-plugins')
    @parent
    <script src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
    @stop

            <!-- JS Page Level -->
@section('scripts-app')
    <script src="{{ theme_asset('js/shop.app.js') }}"></script>
    <script src="{{ theme_asset('js/forms/shop/registration.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            App.initScrollBar();
            Registration.initRegistration();
        });
    </script>

@stop