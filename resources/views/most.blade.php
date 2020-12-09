@extends('layouts.app')
@section('content')
    

@if (Auth::guest()) {{-- Checking for user logged in or not, for contact us dropdown--}}
@else

<div class="container-fluid mt-5 mb-4">
    <h2 class="text-center">Sorted by calorie</h2>
    <div class="row">
        @foreach ($ladishes as $item)
        <div class="col-3">
            <a style="color:inherit; text-decoration: none;" href="/dishinformation/{{$item->id}}">
                <div class="card mx-auto mb-5 border border-danger" style="width: 18rem;">
                    <div class="card-header">
                        <img class="card-img-top" style="width:246; height:246;" src="{{ $item->image}}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <form action="/de">
                            <h5>{{ $item->title }}</h5>
                            <h6>Price ($): {{ $item->Price }}</h6>

                            <a style="border-radius:150px; border:0px;" class="btn btn-lg btn-outline-danger mb-3"
                                data-toggle="collapse" href="#description{{$item->id}}" role="button"
                                aria-expanded="false" aria-controls="description{{$item->id}}">
                                <span><i class="fas fa-chevron-down"></i><span>
                            </a>

                            <div class="collapse" id="description{{$item->id}}">
                                <h5>{{ $item->Description }}</h5>

                            </div>


                            <div class="text-center">
                                <a href="{{ route('cart.add',$item)}}" class="btn btn-danger"> Buy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection