@extends('layouts.app')
@section('content')
<form action="{{'/del/'. $users->id }}" method="POST" >
    @csrf
    @method('delete')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
          <div class="form-group">
            <label for="id">id</label>
          do you  want to delete your  account?
          <button type="submit"  class="btn btn-primary">Delete</button>
          <a href="http://127.0.0.1:8000/" class="btn btn-danger" >back</a>
    </form>
@endsection