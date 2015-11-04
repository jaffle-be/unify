<!-- Monthly Newsletter -->
<div class="{{ isset($class) ?  $class : 'headline'}}">

    @if(isset($small) && $small)
        <h2 class="heading-sm">{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2>
    @else
        <h2>{{ Theme::setting('layoutFooterNewsletterTitle') }}</h2>
    @endif

</div>
<p>{{ Theme::setting('layoutFooterNewsletterText') }}</p>

<form class="footer-subsribe" action="{{ store_route('store.newsletter.store') }}" method="post">
    {!! csrf_field() !!}
    <input name="_form" type="hidden" value="newsletter.subscription"/>
    <div class="input-group">
        <input type="text" name="email" class="form-control" placeholder="{{ Lang::get('Unify::front.newsletter.email') }}">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="submit">{{ Lang::get('Unify::front.newsletter.subscribe') }}</button>
                                </span>
    </div>
</form>
<!-- End Monthly Newsletter -->

@include('Unify::flash.newsletter-subscription')