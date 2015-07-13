@if($contact->hours)
        <!-- Business Hours -->
<div class="headline"><h2>Business Hours</h2></div>
<ul class="list-unstyled margin-bottom-30">
    <? $teller = 0 ?>
    @while($teller < 3)
        <li>{{ $contact->hours }}</li>
        <? $teller++ ?>
    @endwhile
</ul>
@endif