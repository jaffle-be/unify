<ul class="list-unstyled address-list margin-bottom-20">
    @if($contact->address)
        <li>
            <i class="fa fa-angle-right"></i>{!! $contact->address->format() !!}
        </li>
    @endif
    @if($contact->phone)
        <li>
            <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.phone') }}:
            <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
    @endif
    @if($contact->vat)
        <li>
            <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.vat') }}: {{ $contact->vat }}
        </li>
    @endif
    <li>
        <i class="fa fa-angle-right"></i>{{ Lang::get('Unify::front.email') }}:
        <a href="mailto:{{$contact->email}}">{{ $contact->email }}</a>
    </li>
</ul>