@extends('layouts.app')


@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            @if($cart)
            <div class="col-md-8">
                    @foreach( $cart->items as $dish)
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                    {{ $dish['title'] }}
                                    </h5>
                                    <div class="card-text">
                                        ${{ $dish['price'] }}
                                        <a href="#" class="btn btn-danger btn-sm ml-4">Remove</a>
                                        <input type="text" name="qty" id="qty" value={{ $dish['qty']}}>
                                        <a href="#" class="btn btn-secondary btn-sm">Change</a>  
                                    </div>
                                </div>
                            </div>
                          
                    @endforeach
                    <p><strong>Total : ${{$cart->totalPrice}}</strong></p>

            </div>

            <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h3 class="card-titel">
                        Your Cart
                        <hr>    
                    </h3>
                    <div class="card-text">
                        <p>
                        Total Amount is ${{$cart->totalPrice}}
                        </p>
                        <p>
                        Total Quantities is {{$cart->totalQty}}
                        </p>
                        <a href="{{ route('payment', $cart->totalPrice)}}" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            </div>
            </div>
            @else
            <p>There are no items in the cart</p>

            @endif
        </div>
    </div>

@endsection