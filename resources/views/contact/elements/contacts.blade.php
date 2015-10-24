<!-- Contacts -->
<div class="headline"><h2>{{ Theme::setting('contactContactTitle') }}</h2></div>

@if(isset($map) && $map)

    @include('Unify::contact.elements.map')

@endif
<ul class="list-unstyled who margin-bottom-30">
    @if($contact->address->format())
        <li><a href="#"><i class="fa fa-home"></i><span>{!! $contact->address->format(false) !!}</span></a></li>
    @endif

    @if($contact->email)
        <li><a href="#"><i class="fa fa-envelope"></i><span>{{ $contact->email }}</span></a></li>
    @endif

    @if($contact->phone)
        <li><a href="#"><i class="fa fa-phone"></i><span>{{ $contact->phone }}</span></a></li>
    @endif

    @if($contact->website)
        <li><a href="#"><i class="fa fa-globe"></i><span>{{ $contact->website }}</span></a></li>
    @endif

    @if($contact->vat)
        <li><a href="#"><i class="fa fa-money"></i><span>{{ $contact->vat }}</span></a></li>
    @endif
</ul>