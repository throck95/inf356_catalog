@extends("imagemaster")
@section("header")
    <script src="/js/script.js" type="text/javascript"></script>
@stop
@section("content")
    <section>
        {!! Form::open(["route"=>"image_store","method"=>"post","id"=>"createForm","enctype"=>"multipart/form-data","files"=>true]) !!}
        @include("images/_edit_create_form")
        {!! Form::close() !!}
        <img id="imgTag" name="imgTag" src="" /><br />
    </section>
@stop