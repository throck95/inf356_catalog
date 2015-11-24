@extends("homework1master")

@section("content")
    <section>
        <h2>ID: {{$product->id}}</h2>
        <h3>Name: {{$product->name}}</h3>
        <p><strong>Description:</strong> {!! nl2br($product->description) !!}</p>
        <p><strong>Price:</strong> ${{$product->price}}</p>
        @if($product->in_stock == 0)
            <p>In Stock</p>
        @else
            <p>Out of Stock</p>
        @endif
        <img src="/images/homework1/{{$product->image}}" alt="{{$product->name}}" />
    </section>
@stop
