@if($contact->address && $contact->address->latitude && $contact->address->longitude)
    <input name="latitude" type="hidden" id="latitude" value="{{ $contact->address->latitude }}"/>
    <input name="longitude" type="hidden" id="longitude" value="{{ $contact->address->longitude }}"/>

    <?

    $margin = isset($margin) && $margin ? 'margin-bottom-20' : '';
    $height = isset($height) && $height ? 'height:' . $height : '';
    $square = isset($square) && $square ? 'map-box ' . $square : '';

    ?>

    <div id="map" class="map {{ $margin }} {{ $square }}" style="{{ isset($height) ? 'height:' . $height . ';' : '' }}">
    </div>

@endif