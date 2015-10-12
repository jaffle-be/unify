<!-- Contacts -->
<div class="headline"><h2>{{ Theme::setting('contactContactTitle') }}</h2></div>

@if(isset($map) && $map)

    @include('Unify::contact.elements.map')

@endif
<ul class="list-unstyled who margin-bottom-30" itemscope itemtype="http://schema.org/Organization">
    @if($contact->address->format())
        <li><a href="#"><i class="fa fa-home"></i><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">{!! $contact->address->format() !!}</span></a></li>
    @endif

    @if($contact->email)
        <li><a href="#"><i class="fa fa-envelope"></i><span itemprop="email">{{ $contact->email }}</span></a></li>
    @endif

    @if($contact->phone)
        <li><a href="#"><i class="fa fa-phone"></i><span itemprop="telephone">{{ $contact->phone }}</span></a></li>
    @endif

    @if($contact->website)
        <li><a href="#"><i class="fa fa-globe"></i><span itemprop="url">{{ $contact->website }}</span></a></li>
    @endif

    @if($contact->vat)
        <li><a href="#"><i class="fa fa-money"></i><span itemprop="vatID">{{ $contact->vat }}</span></a></li>
    @endif
</ul>