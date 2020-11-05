@extends('layouts.app')
@section('content')
    



    <br>
   
  <div class="container  infor pb-3 mb-3">
    <form class=text-center>
     <h3 style="text-align: center;"> Here you can see more detalis about the dish: {{$dishes->title}}</h3>
     <div class="">
     <img style="width:250px; height:250px;" src="{{$dishes->image}}" alt="">
     </div>
     <div class="div mt-4">
            <h3>{{$dishes->title}}</h3>
          </div>
          <br>
          <h5>{{$dishes->Price}} $</h5>
          <br>
          {{$dishes->Description}}
          <br>
        {{$dishes->Calorie}}
          <br>
          
    </form>
 
    </div>

    <style>
.infor{
  background-color: bisque;
  
}
.descr{
  width:400px;
  height:200px;
  resize:none;
}

    </style>
    @endsection