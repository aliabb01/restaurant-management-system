@extends('layouts.app')
@section('content')
<div class="conatiner" style=";"> 
<form action="{{'/upd3/'. Auth::user()->id}}" method="POST" >
   
    @method('PUT')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
          <div class="form-group">
            <label for="id">id</label>
          <input type="text" class="form-control" name="id" value="{{Auth::user()->id}}">
          </div>
          <br>
          <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
          </div>
          <br>
          <div class="form-group">
            <label for="email">email</label>
            <input type="value" class="form-control" name="email" value="{{Auth::user()->email}}" >
          </div>
          <br>
          <div class="form-group">
            <label for="city">city</label>
            <input type="value" class="form-control" name="city" value="{{Auth::user()->city}}" >
          </div>
          <br>
           <div class="form-group">
            <label for="street">street</label>
            <input type="value" class="form-control" name="street" value="{{Auth::user()->street}}" >
          </div><br>
          <br>
          <div class="form-group">
           <label for="zip_code">zip_code</label>
           <input type="value" class="form-control" name="zip_code" value="{{Auth::user()->zip_code}}" >
         </div><br>
         <br>
         <div class="form-group">
          <label for="apartment_NO">apartment_NO</label>
          <input type="value" class="form-control" name="apartment_NO" value="{{Auth::user()->apartment_NO}}" >
        </div><br>
        <br>
        <div class="form-group">
         <label for="building_NO">building_NO</label>
         <input type="value" class="form-control" name="building_NO" value="{{Auth::user()->building_NO}}" >
       </div><br>
       <br>
       <div class="form-group">
        <label for="district">district</label>
        <input type="value" class="form-control" name="district" value="{{Auth::user()->district}}" >
      </div><br>
          <button type="submit"  class="btn btn-primary">update</button>
    </form>  
  </div> 
@endsection