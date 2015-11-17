@extends("master1")

@section("content")
    <section>
        {!! Form::model($song, ["url"=>"songs/".$song->titleToSlug(),"method"=>"PATCH"]) !!}
        @include("songs/_edit_create_form")
        {!! Form::close() !!}
        {!! Form::open(["method"=>"DELETE","route"=>["songs.destroy",$song->id]]) !!}
            {!! Form::hidden("id",$song->id) !!}
            {!! Form::submit("Delete",["class"=>"btn btn-danger"]) !!}
        {!! Form::close() !!}
    </section>
@stop