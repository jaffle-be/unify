@foreach(Menu::get('primary menu')->items as $item)
    @if($item->present()->shouldPresent())
        @if($item->children->count() == 0)
            <li><a href="{{ $item->present()->url }}" target="{{ $item->target }}">{{ $item->name }}</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item->name }}</a>
                <ul class="dropdown-menu">
                    @foreach($item->children as $child)
                        <li>
                            <a href="{{ $child->present()->url }}" target="{{ $child->target }}">{{ $child->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif
    @endif
@endforeach