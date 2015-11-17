@extends("master1")

@section("content")
    <section>
        <h1>{{$song->title}}</h1>
        <p>{!! nl2br($song->lyrics) !!}</p>
        {!! link_to_route("song_path","All Music") !!}
    </section>
@stop