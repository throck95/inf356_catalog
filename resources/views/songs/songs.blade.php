@extends("master1")

@section("content")
    <section>
        <h1>Titles of Beachboys' Songs</h1>
        <p>
            <ul>
                @foreach($songs as $song)
                    <li>
                        {!! link_to_route("song_path",$song->title,[$song->id]) !!}
                    </li>
                @endforeach
            </ul>
        </p>
    </section>
@stop