@extends('Unify::Unify')

@section('styles-plugins')
    @parent

    <link rel="stylesheet" href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet"
          href="{{ theme_asset('plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">
    <!--[if lt IE 9]>
    <link rel="stylesheet"
          href="{{ theme_asset('plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css') }}"><![endif]-->
@stop

@section('styles-content')
    <link rel="stylesheet" href="{{ theme_asset('css/pages/page_contact.min.css') }}">
@stop
<body>

@section('breadcrumb')
    @include('Unify::contact.elements.breadcrumbs')
@stop

@section('content')
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>Contact Form</h2></div>

                @if($contact->form_description)
                <p>{{$contact->form_description}}</p>
                @endif

                @if($success)
                    <form method="post" id="sky-form3"
                          class="sky-form contact-style">
                        <p class="text-center" style="padding-top: 25px;">
                            <i style="font-size:5em; color: #72c02c;" class="rounded-x icon icon-check"></i>
                        </p>
                    </form>
                @else
                    <form action="{{ route('store.contact.store') }}" method="post"
                          id="sky-form3" class="sky-form sky-changes-3">

                        {!! csrf_field() !!}
                        <input name="_id" type="hidden" value="{{ $contact->id }}"/>

                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Name</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="name" id="name">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">E-mail</label>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope-o"></i>
                                        <input type="email" name="email" id="email">
                                    </label>
                                </section>
                            </div>

                            <section>
                                <label class="label">Subject</label>
                                <label class="input">
                                    <i class="icon-append fa fa-tag"></i>
                                    <input type="text" name="subject" id="subject">
                                </label>
                            </section>

                            <section>
                                <label class="label">Message</label>
                                <label class="textarea">
                                    <i class="icon-append fa fa-comment"></i>
                                    <textarea rows="4" name="message" id="message"></textarea>
                                </label>
                            </section>

                            <section>
                                <label class="label">Enter characters below:</label>
                                <label class="input input-captcha">
                                    <img src="{{ captcha_src() }}"
                                         width="120" height="32" alt="Captcha image"/>
                                    <input type="text" maxlength="6" name="captcha" id="captcha">
                                </label>

                                @if($errors->has('captcha'))
                                    <label class="error">{{ $errors->first('captcha') }}</label>
                                @endif
                            </section>

                            <section>
                                <label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my
                                    e-mail
                                    address</label>
                            </section>
                        </fieldset>

                        <footer>
                            <button type="submit" class="btn-u">Send message</button>
                        </footer>
                    </form>
                @endif
            </div>
            <!--/col-md-9-->

            <div class="col-md-3">

                @include('Unify::contact.elements.contacts')

                @include('Unify::contact.elements.hours')

                @include('Unify::contact.elements.widget')


            </div>
            <!--/col-md-3-->
        </div>
        <!--/row-->
    </div>

    @include('Unify::contact.elements.map')
@stop


@section('scripts-plugins')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ theme_asset('plugins/gmap/gmap.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ theme_asset('plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js') }}"></script>
@stop

@section('scripts-app')
    <script type="text/javascript" src="{{ theme_asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ theme_asset('js/pages/page_contacts.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            ContactPage.initMap();
        });
    </script>

@stop