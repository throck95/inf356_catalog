@extends("imagemaster")

@section("content")
    <section>
        <h1>Images</h1>
        <p>
        <ul>
            @foreach($images as $image)
                <li>
                    {!! link_to_route("image_path",$image->id . ": " . $image->title . ", Category: " . $image->category,[$image->id]) !!}
                </li>
            @endforeach
        </ul>
        </p>
    </section>
@stop