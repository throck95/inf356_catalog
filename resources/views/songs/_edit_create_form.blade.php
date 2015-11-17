<div class="form-group">
    <label>Title: {!! Form::text("title", null, ["class"=>"form-control"]) !!}</label>
</div>
<span class="help-block">{{$errors->first("title")}}</span>
<div class="form-group">
    <label>Lyrics: {!! Form::textArea("lyrics", null, ["class"=>"form-control"]) !!}</label>
</div>
<div class="form-group">
    {!! Form::submit("Update", ["class"=>"btn btn-primary"]) !!}
</div>