@extends('layouts.app')

@section('content')

<style>
    .company {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 25px;
    }

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

    .search-input {
        padding-right: 100px;
        padding-left: 100px;
        text-align: center;
    }

    .card-img-top {
        transition: 0.5s;
    }

    .card-img-top:hover {
        transform: scale(1.1);
        transition: 0.5s;
    }

    .card {
        transition: 0.5s;
    }

    .card:hover {
        -webkit-box-shadow: 0px 0px 15px 0.5px rgb(0, 183, 255);
        -moz-box-shadow: 0px 0px 15px 0.5px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 15px 0.5px rgba(0, 0, 0, 0.3);
        transition: 0.5s;
    }

    .card:hover .card-header {}
</style>

<div class="container main-cont pt-4">

    <div class="text-center">
        <img style="height:200px; width:200px;" src="images/red_hat.svg" alt="">
    </div>

    <div class="text-center company">
        <span>La Cozzza Infuriata</span>
    </div>

    <div class="container search-container text-center mt-5 mb-5">
        <form action="/result" method="get">
            <input class="search-input pb-2" type="text" placeholder="Search for dishes" name="query" id="query"
                value="{{request()->input('query')}}">


            <button class="btn pt-2 pb-2 search-btn" type="submit"><i class="fa fa-search "></i></button>
        </form>
    </div>


</div>
<div class="text-center">
    <form action="/po">

        <label for="">Price</label>

        <br>
        min: <input type="text" name="min_price" value="{{Request::get('min_price')}}">


        max: <input type="text" name="max_price" value="{{Request::get('max_price')}}">



        <br>

        <br>

        <button>Go</button>
    </form>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        @foreach(App\Dish::all() as $dish)
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
                                data-toggle="collapse" href="#description{{$dish->id}}" role="button"
                                aria-expanded="false" aria-controls="description{{$dish->id}}">
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
        <br>


        <!-- <div class="col-3">
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
        </div>-->

    </div>
</div>
<a href="/most">Most</a>
<br>
<div>
<h3>subsribe for emial</h3>
<input type="email" name="email" id="" placeholder="email">
<a href="/sub"> enter</a>
</div>


@if (session('success1'))
{{
Mail::send('payment-email',[],function($m){
  $m->to('user@gmail.com')->subject('La Cozzza Infuriata');
  return view ('welcome');
})
}}

@endif
@if (session('me'))
  {{ 
    Mail::send('adver',[],function($m){
      $m->to('user@gmail.com')->subject('La Cozzza Infuriata');
      return view ('welcome');
    })
}}

@endif
@endsection