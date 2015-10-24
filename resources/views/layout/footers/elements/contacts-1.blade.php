<!-- Contact Us -->
<div class="headline">
    <h2 class="{{isset($small) && $small ? 'heading-sm': ''}}">{{ Theme::setting('layoutFooterContactTitle') }}</h2>
</div>
<div itemscope itemtype="//schema.org/Organization" id="contact-organisation" itemref="organisation-social-links logo-header logo-default">
    <address class="contact-address-footer md-margin-bottom-40">
        @if($contact->address->format())
            <i class="fa fa-home"></i>&nbsp;<span itemprop="address" itemscope itemtype="//schema.org/PostalAddress">{!! $contact->address->format() !!}</span></span><br>
        @endif

        @if($contact->email)
            <i class="fa fa-envelope"></i>&nbsp;<span itemprop="email">{{ $contact->email }}</span><br>
        @endif

        @if($contact->phone)
            <i class="fa fa-phone"></i>&nbsp;<span itemprop="telephone">{{ $contact->phone }}</span><br>
        @endif

        @if($contact->vat)
            <i class="fa fa-money"></i>&nbsp;<span itemprop="vatID">{{ $contact->vat }}</span><br>
        @endif
    </address>
    <!-- End Contact Us -->
</div>