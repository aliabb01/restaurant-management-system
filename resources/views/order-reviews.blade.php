@extends('layouts.other')
@section('content')
<div class="container text-center pt-5 mt=5 mb-1">
 our client {{$name = Auth::user()->name}} we are happy to know your opion about the order 
 <br>
 <textarea id="w3review" name="w3review" rows="4" cols="50" style="resize:none;">
   
    </textarea>
    <br>
    <a href="/welcome" class="btn btn-success"> submit</a>
    <a href="/history" class="btn btn-danger">Back</a>
</div>
@endsection