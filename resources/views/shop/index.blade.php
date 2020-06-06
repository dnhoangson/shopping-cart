@extends('layouts.master')

@section('title')
Laravel Shopping Cart
@endsection


@section('content')
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6  col-xs-12 col-md-4 card-height">
            <div class="card thumbnail h-100" style="width: 18rem;">
                <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <div class="clearfix mt-auto">
                        <div class="float-left price">${{ $product->price }}</div>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success btn-outline-success float-right "><i class="fas fa-cart-plus"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

@endsection

