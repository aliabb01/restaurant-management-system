@extends('layouts.app')
@section('content')
<div class="container border mt-5 mb-5 text-center" style="width:40%; " >
<form action="{{'/del/'. $users->id }}" method="POST" >
    @csrf
    @method('delete')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
          <div class="form-group mt-1">
            <label for="id"></label>
          Do you  want to delete your  account?
          <br class="m mb-3">
          <button type="submit"  class="btn btn-primary mt-3">Delete</button>
          <a href="http://127.0.0.1:8000/my-profile" class="btn btn-danger ml-5 mt-3" >back</a>
    </form>
  </div>
@endsection