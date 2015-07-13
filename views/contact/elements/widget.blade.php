@if($contact->widget_title && $contact->widget_content)
    <div class="headline"><h2>{{ $contact->widget_title }}</h2></div>
    <p>{{ $contact->widget_content }}</p>
    <ul class="list-unstyled">
        <li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
        <li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
        <li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
    </ul>
@endif