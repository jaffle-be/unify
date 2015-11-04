<div class="shop-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-8 md-margin-bottom-20">
                <h2>subscribe to our weekly <strong>newsletter</strong></h2>
            </div>
            <div class="col-md-4" href="#newsletter" id="newsletter">
                <form action="{{ store_route('store.newsletter.store') }}" method="post">

                    {!! csrf_field() !!}
                    <input name="_form" type="hidden" value="newsletter.subscription"/>

                    <div class="input-group">
                        <input type="text" name="email" class="form-control" placeholder="Email your email...">
                        <span class="input-group-btn">
                            <button class="btn" type="submit"><i class="fa fa-envelope-o"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/end container-->
</div>


@include('Unify::flash.newsletter-subscription')