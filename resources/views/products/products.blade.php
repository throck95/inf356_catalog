@extends("homework1master")

@section("content")
    <section>
        <h2>All Products</h2>
        <p>
        <ol>
            @foreach($products as $product)
                <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
            @endforeach
        </ol>
        </p>
    </section>
@stop