<div itemscope itemtype="//schema.org/Organization" id="contact-organisation" itemref="organisation-social-links logo-header logo-default">
    <ul class="list-unstyled address-list margin-bottom-20" >
        @if($contact->address)
            <li itemprop="address" itemscope itemtype="//schema.org/PostalAddress">
                <i class="fa fa-angle-right"></i>{!! $contact->address->format() !!}
            </li>
        @endif
        @if($contact->phone)
            <li>
                <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.phone') }}:
                <a href="tel:{{ $contact->phone }}"><span itemprop="telephone">{{ $contact->phone }}</span></a></li>
        @endif
        @if($contact->vat)
            <li>
                <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.vat') }}: <span itemprop="vatID">{{ $contact->vat }}</span>
            </li>
        @endif
        <li>
            <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.email') }}:
            <span itemprop="email">{{ $contact->email }}</span>
        </li>
    </ul>
</div>