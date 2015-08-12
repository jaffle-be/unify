@section('styles-footer')
    <link rel="stylesheet" href="{{ theme_asset('css/footers/footer-v7.css') }}">
@stop

@section('footer')

    <!--=== Footer v7 ===-->
    <section id="footer-v7" class="contacts-section">

        <div class="copyright-section">
            <p>
                {{ Carbon\Carbon::now()->format('Y') }} &copy; <a target="_blank" href="http://digiredo.be">Digiredo</a> All Rights Reserved.
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </p>

            @include('Unify::layout.footers.elements.social-icons-7')

            <a href="#top"><i class="fa fa-angle-double-up back-to-top"></i></a>
        </div>
    </section>
    <!--=== End Footer v7 ===-->
@stop

{{--@todo: these sections don't exist yet--}}
@section('scripts-ie-lt-9')
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
@stop

@section('scripts-ie-lt-10')
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
@stop