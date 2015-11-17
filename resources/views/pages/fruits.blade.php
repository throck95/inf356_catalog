@extends("master1")

@section("content")
    <ul>
        @if(count($data)>0)
            @foreach($data as $item)
                <li>{{$item}}</li>
            @endforeach
        @else
            <li>No fruits exist!</li>
        @endif
    </ul>
@stop