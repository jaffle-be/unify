@if($clients->count())
<!-- Owl Clients v1 -->
<div class="headline"><h2>{{ Theme::setting('widgetOurClientsTitle') }}</h2></div>
<div class="owl-clients-v1">
    @foreach($clients as $client)
    <div class="item">
        <img src="{{ asset($client->images->thumbnail(null, 90)) }}" alt="{{ $client->images->name }}">
    </div>
    @endforeach
</div>
<!-- End Owl Clients v1 -->
@endif