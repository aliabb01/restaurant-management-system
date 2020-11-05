@extends('layouts.app')

@section('content')

<style>
    .btn-subscribe {
        background-color: aqua;
        color: black;
    }

    .btn-subscribe:hover {
        transition: 0.1s;
        background-color: black;
        color: aqua;
    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }

    .search-btn {
        background-color: #fddb3a;
    }

    .search-input{
        padding-right:100px;
        padding-left:100px;
        text-align:center;
    }
</style>

<div class="container">

    <div class="text-center">
        <img style="height:300px; width:300px;" src="images/logo_transparent.png" alt="">
    </div>

    <div class="container search-container text-center mt-5 mb-5">
        <form class="" action="/result">
            <input class="search-input pb-2" type="text" placeholder="Search for dishes" name="search">
            <button class="btn pt-2 pb-2 search-btn" type="submit"><i class="fa fa-search "></i></button>
        </form>
    </div>

    <!--<div class="container pt-1 pb-2 my-3  bg-dark su" id="">

            <h4 class="text-center mt-1">
                <span>Stay up to date in the email world.</span> </h4>
            <h4 class="text-center mt-1">
                Subscribe for weekly emails with curated articles, guides, and videos to enhance your marketing tactics.
            </h4>

            
        </div>-->






</div>

<div class="container-fluid">
    <div class="row">
        @foreach(App\Dish::all() as $dish)
        <div class="col-3 col-sm">
            <div class="card mx-auto mb-5" style="width: 18rem;">
                <div class="card-header">
                <img class="card-img-top" style="width:246; height:246;" src="{{ $dish->image}}"
                        alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5>{{ $dish->title }}</h5>
                    <h6>Price ($): {{ $dish->Price }}</h6>

                    <a style="border-radius:150px; border:0px;" class="btn btn-lg btn-outline-danger mb-3" data-toggle="collapse" href="#description{{$dish->id}}" role="button"
                aria-expanded="false" aria-controls="description{{$dish->id}}">
                        <span><i class="fas fa-chevron-down"></i><span>
                    </a>

                    <div class="collapse" id="description{{$dish->id}}">
                        <h5>{{ $dish->Description }}</h5>
                    </div>


                    <div class="text-center">
                        <a href="{{ route('cart.add',$dish)}}" class="btn btn-danger"> Buy</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--<div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
    </div>
</div>-

<!--<div class="row">

    @foreach(App\Dish::all() as $dish)
    <div class="col-md-4">
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $dish->title }}</h5>

                price:$ {{ $dish->Price }}
                <br>
                <a href="{{ route('cart.add',$dish)}}" class="btn btn-primary"> Buy</a>
            </div>
        </div>
        @endforeach

    </div>

</div>-->



@endsection
<style>
</style>