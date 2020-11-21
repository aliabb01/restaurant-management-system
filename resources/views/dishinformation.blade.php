@extends('layouts.app')
@section('content')

<div class="container mt-5 border border-danger rounded-top">
  
  <div class="dish-image text-center mb-2 ">
    <img style="width:250px; height:250px;" src="{{$dishes->image}}" alt="">
  </div>
</div>

<div class="container mb-5 border rounded-bottom bg-white">
  <h2 class="text-center mt-3">{{$dishes->title}}</h2>
  <div class="description mt-3">
    <h5><b>Description</b> : {{$dishes->Description}}</h5>
  </div>
  <div class="pricing mt-3">
    <h5>Price per unit : {{$dishes->Price}} $</h5>
  </div>
  <h6>Note : {{$dishes->title}} contains {{$dishes->Calorie}} calories</h6>

  <div class="text-center mt-2 mb-2">
    <a href="{{ route('cart.add',$dishes)}}" class="btn btn-danger">Buy</a>
  </div>
</div>

{{--<div class="container  infor pb-3 mb-3">
  <form class="text-center">
    <h3 style="text-align: center;"> Here you can see more detalis about the dish: {{$dishes->title}}</h3>
    <div class="">

    </div>
    <div class="div mt-4">
      <h3>{{$dishes->title}}</h3>
    </div>
    <br>
    <h5>{{$dishes->Price}} $</h5>
    <br>
    {{$dishes->Description}}
    <br>

    <br>

  </form>

</div>--}}

<style>
  .infor {
    background-color: bisque;

  }

  .descr {
    width: 400px;
    height: 200px;
    resize: none;
  }
</style>
@endsection