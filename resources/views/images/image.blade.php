@extends("imagemaster")

@section("content")
    <section>
        <h1>{{ $image->id . ": " . $image->title . ", Category: " . $image->category }}</h1>
        <p><img src="{{URL::to('/')}}{{$image->image_location}}" /></p>
        <p>Points: {{ $image->points_array }}</p>
        {!! link_to_route("images_path","All Images") !!}
    </section>
@stop