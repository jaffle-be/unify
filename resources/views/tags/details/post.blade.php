<div>

    <h4>{{ $post->title }}</h4>


    <img src="{{ asset($post->thumbnail(460)) }}" alt="">

    {{ $post->extract }}


</div>