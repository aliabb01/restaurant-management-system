@extends('layouts.app')
@section('content')
<div class="container text-center pt-5 mt=5 mb-1">
 our client {{$name = Auth::user()->name}} we are happy to know your opion about the order 
 <br>
 <form action="storereview" method="POST">
    @csrf
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type="hidden" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name"
    name="user_id" value="{{ Auth::user()->id}}" style="width:60px;">
<br>
 <textarea id="w3review" name="body" rows="4" cols="50" style="resize:none;">
   
    </textarea>
    <br>
    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="qulity"
    name="quality"  >
<br>
<button class="btn btn-primary border text-light"> Submit</button>
   
</form>
</div>
@endsection