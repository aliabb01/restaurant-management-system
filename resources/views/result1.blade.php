@extends('layouts.app')
@section('content')
    <br>

   <h2 class="text-center">Result of search </h2> 
@foreach($dishes as $dish)

<div class="col-3 col-sm">
    <a style="color:inherit; text-decoration: none;" href="/dishinformation/{{$dish->id}}">
        <div class="card mx-auto mb-5 border border-danger" style="width: 18rem;">
            <div class="card-header">
                <img class="card-img-top" style="width:246; height:246;" src="{{ $dish->image}}"
                    alt="Card image cap">
            </div>
            <div class="card-body">
                <form action="/de">
                <h5>{{ $dish->title }}</h5>
                <h6>Price ($): {{ $dish->Price }}</h6>

                <a style="border-radius:150px; border:0px;" class="btn btn-lg btn-outline-danger mb-3"
                    data-toggle="collapse" href="#description{{$dish->id}}" role="button" aria-expanded="false"
                    aria-controls="description{{$dish->id}}">
                    <span><i class="fas fa-chevron-down"></i><span>
                </a>

                <div class="collapse" id="description{{$dish->id}}">
                    <h5>{{ $dish->Description }}</h5>

                </div>


                <div class="text-center">
                    <a href="{{ route('cart.add',$dish)}}" class="btn btn-danger"> Buy</a>
                </div>
            </form>
            </div>
        </div>
    </a>
</div>

@endforeach
@endsection