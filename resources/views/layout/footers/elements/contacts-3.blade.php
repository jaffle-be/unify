<ul class="list-unstyled contacts" itemscope itemtype="//schema.org/Organization" id="contact-organisation" itemref="organisation-social-links logo-header logo-default">
    @if($contact->address->format())
    <li itemprop="address" itemscope itemtype="//schema.org/PostalAddress">
        <i class="radius-3x fa fa-map-marker"></i>
        {!! $contact->address->format() !!}
    </li>
    @endif
    @if($contact->phone)
    <li>
        <i class="radius-3x fa fa-phone"></i>
        <a href="tel:{{ $contact->phone }}"><span itemprop="telephone">{{ $contact->phone }}</span></a><br>
    </li>
    @endif
    @if($contact->vat)
    <li>
        <i class="radius-3x fa fa-money"></i>
        <span itemprop="vatID">{{ $contact->vat }}</span><br>
    </li>
    @endif
    <li>
        <i class="radius-3x fa fa-globe"></i>
        <span itemprop="email">{{ $contact->email }}</span><br>
    </li>
</ul>