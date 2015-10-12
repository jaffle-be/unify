<ul class="list-unstyled contacts">
    @if($contact->address->format())
    <li>
        <i class="radius-3x fa fa-map-marker"></i>
        {!! $contact->address->format() !!}
    </li>
    @endif
    @if($contact->phone)
    <li>
        <i class="radius-3x fa fa-phone"></i>
        <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a><br>
    </li>
    @endif
    @if($contact->vat)
    <li>
        <i class="radius-3x fa fa-money"></i>
        {{ $contact->vat }}<br>
    </li>
    @endif
    <li>
        <i class="radius-3x fa fa-globe"></i>
        <a href="mailto:{{$contact->email}}">{{ $contact->email }}</a><br>
    </li>
</ul>