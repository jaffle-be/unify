<!-- Contacts -->
<div class="headline"><h2>Contacts</h2></div>

@if(isset($map) && $map)

    @include('theme.unify::contact.elements.map')

@endif
<ul class="list-unstyled who margin-bottom-30">
    @if($contact->address->format())
        <li><a href="#"><i class="fa fa-home"></i>{{$contact->address->format() }}</a></li>
    @endif

    @if($contact->email)
        <li><a href="#"><i class="fa fa-envelope"></i>{{ $contact->email }}</a></li>
    @endif

    @if($contact->phone)
        <li><a href="#"><i class="fa fa-phone"></i>{{ $contact->phone }}</a></li>
    @endif

    @if($contact->website)
        <li><a href="#"><i class="fa fa-globe"></i>{{ $contact->website }}</a></li>
    @endif

    @if($contact->vat)
        <li><a href="#"><i class="fa fa-money"></i>{{ $contact->vat }}</a></li>
    @endif
</ul>