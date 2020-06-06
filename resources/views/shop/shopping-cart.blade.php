@extends('layouts.master')

@section('title')
Laravel Shopping Cart
@endsection


@section('content')
@if(Session::has('cart'))

<div class="row">
    <ul class="list-group col-12">
        <div class="row">
            @foreach($products as $product)

            <li class="list-group-item col-12">
                <div class="col-1">
                    <span class="badge badge-secondary">{{ $product['qty'] }}</span>
                </div>
                <div class="col-4">
                    <strong>{{ $product['item']['title'] }}</strong>
                </div>
                <div class="offset-md-2 col-1">
                    <span class="label label-success">{{ $product['price'] }}</span>
                </div>
                <div class="offset-md-1 col-md-2">
                    <div class="btn-group pull-right">
                        <button type="button" class="text-right btn btn-primary btn-outline-primary btn-xs active dropdown-toggle" data-toggle="dropdown"  >
                            Action <span class="caret"></span>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a href="#" class="dropdown-item">Reduce by 1</a></li>
                                <li><a href="#" class="dropdown-item">Remove all</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </li>
            @endforeach
        </div> 
        
    </ul>
    
</div>
<div class="row">
    <div class="col-sm-6">
        <strong>Total Price: {{ $totalPrice }}</strong>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6">
        <button type="button" class="btn btn-success btn-outline-success">Checkout</button>
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-6">
        <h2>No item in cart!</h2>
    </div>
</div>
@endif
@endsection