@extends('layouts.app')
@section('content')
    <!-- Default form register -->
<form class="text-center p-5 text-light" action="/store" method="POST"  style="background-color:#394867;">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <p class="h3 mb-4">Feedback </p>
    <p class="h4 mb-4">We are continually striving to improve our services, any comments and feedback would be gratefully appreciated! </p>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <textarea  class="form-control mb-4" cols="30" rows="10"  placeholder="Feedback"  name="body">
       </textarea>
    <button  > Submit</button>

   

 

   
    
    <hr>

    

</form>

<h3><p style="font-style: oblique;color:blue;">Comments:<p></h3>
@foreach($feeds as $i)
  <hr>
  <div class="media ml-2">
        <div class="media-body">
      <h5 class="mt-0 media-heading">
     
        
      </h5>
      
      <p> Comment:<br> {{$i->body}}</p>
          Date: {{ date('d M Y') }}
    

    
    </div>
  </div>
  @endforeach
@endsection