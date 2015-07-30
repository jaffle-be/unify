<!-- Contact Us -->
<div class="headline"><h2>Contact Us</h2></div>
<address class="contact-address-footer md-margin-bottom-40">
    @if($contact->address->format())
        <i class="fa fa-home"></i>&nbsp;{{$contact->address->format() }}<br>
    @endif

    @if($contact->email)
        <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:{{$contact->email}}">{{ $contact->email }}</a><br>
    @endif

    @if($contact->phone)
        <i class="fa fa-phone"></i>&nbsp;{{ $contact->phone }}<br>
    @endif

    @if($contact->website)
        <i class="fa fa-globe"></i>&nbsp;{{ $contact->website }}<br>
    @endif

    @if($contact->vat)
        <i class="fa fa-money"></i>&nbsp;{{ $contact->vat }}<br>
    @endif
</address>
<!-- End Contact Us -->