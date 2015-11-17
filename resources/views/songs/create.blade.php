@extends("master1")

@section("content")
    <section>
        {!! Form::open(["url"=>"songs","method"=>"POST"]) !!}
        @include("songs/_edit_create_form")
        {!! Form::close() !!}
    </section>
@stop