@extends('layouts.app')

@section('content')
<    <div class="row">
       
    @foreach(App\Dish::all() as $dish)
        <div class="col-md-4">
        
            <div class="card mb-2">
                    
                    
                    <div class="card-body">
                        <h5 >{{ $dish->title }}</h5>
                        
                         price:$ {{ $dish->price }}
                        <a href="{{ route('cart.add',$dish)}}" class="btn btn-primary"> Buy</a>
            </div>
            
        </div>
        @endforeach
       
 </div>
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
</style>

<div class="container">
    <h3>This is Home page</h3>


    <div class="container search-container text-center mt-5">
        <form class="" action="/result">
            <input class="pr-5 pl-5 pt-2 pb-2" type="text" placeholder="Search for dishes" name="search">
            <button class="btn btn-success pt-2 pb-2" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="container pt-1 pb-2 my-3  bg-dark su" id=""  style="background-image: url('images/img.jpg');" >

    <h4 class="text-center mt-1">
    <span>Stay up to date in the email world.</span> </h4>
    </br>
    <h4 class="text-center mt-1">
    Subscribe for weekly emails with curated articles, guides, and videos to enhance your marketing tactics.
    </h4>
    
    @include('subscribe')
    </div>

   

    <h4 class="text-center mt-5">
        section for feedback(it can be placed in footer also)
    </h4>
    @include('feedback')

</div>
@endsection
<style> 
.su{
background:url(images/img.jpg);
  background-repeat: no-repeat;
  background-size:1405px 530px ;


}
  </style>