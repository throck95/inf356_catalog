@extends("master1")

@section("content")
    <section>
        <h1>Image Not Found</h1>
        <p>This Id is not in our database of images. Sorry.</p>
        {!! link_to_route("images_path","All Images") !!}
    </section>
@stop