<? $optional_class = !isset($optional_class) ? '' : $optional_class ?>

<ul class="list-unstyled {{ $optional_class }}">
    @foreach(Menu::get('footer menu')->items as $item)
        @if($item->present()->shouldPresent())
        <li>
            <a target="{{ $item->target_blank ? '_blank' : '' }}" href="{{ $item->url }}">{{ $item->name }}</a><i class="fa fa-angle-right"></i>
        </li>
        @endif
    @endforeach
</ul>