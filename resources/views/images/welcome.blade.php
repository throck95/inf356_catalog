@extends("imagemaster")

@section("content")
    <section>
        <h1>Welcome to the Image Bank</h1>
        <nav>
            {!! link_to_route("images_path","All Images") !!}<br />
            {!! link_to_route("image_create","New Image") !!}<br />
        </nav>
    </section>
@stop