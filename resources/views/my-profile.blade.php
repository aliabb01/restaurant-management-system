@extends('layouts.app')

@section('content')

<style>
  .myprofile-main {
    background-color: var(--body-background);
  }

  .input {
    width: 24%;
  }

  .myset {
    font-size: 25px;
  }

  .edit {
    margin-right: 2%;
  }
</style>
<div class="myprofile-main " style="color:aliceblue;background-image: url('https://www.thereadinglists.com/wp-content/uploads/2017/11/the-best-cook-books-for-beginners1.png');background-repeat:no-repeat;background-size:cover;">
  <div class="container myprofile text-center pt-5 pb-5">
    <h2 class="my-set text-center" >my Profile </h2>
    <hr style="border-color:black;">
    <tr>
      <p>
        <b class="text-left" >profile picture  :</b>
        <br>
        <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
          style="width:150px; height:150px; border-radius:50%; margin-right:25px;">
        <form action="/uplade" method="POST" enctype="multipart/form-data">
          <label>Update Profile Image</label> <br>
          <input type="file" name="avatar" style="background-color:silver;color:black;">
          @csrf
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <br>
          <input type="submit" class="pull-right ml-3 btn btn-sm btn-primary">
        </form>
     
      </p>
     
      <div class="card " style="width:30%;background-color:lightblue;  margin-left: 35%;">
        <div class=" container ">
      <p>
        <b>id:</b>
        <br>
        <input class="input" type="number" value="{{Auth::user()->id}}" readonly>
      </p>

     

      <p>
        <b>name</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->name}}" readonly>
      </p>

      <p>
        <b>email :</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->email}}" readonly>
      </p>
      <p>
      <b>city :</b>
      <br>
      <input class="input" type="text" value="{{Auth::user()->city}}" readonly>
    </p>
      <p>
        <b>street :</b>
        <br>
      <input class="input" type="text" value="{{Auth::user()->street}}" readonly>
      <br>
    </p>
    <p>
        <b>zip_code :</b>
        <br>
      <input class="input" type="text" value="{{Auth::user()->zip_code}}" readonly>
    </p>
      <p>
        <b>apartment_NO :</b>
        <br>
      <input class="input" type="text" value="{{Auth::user()->apartment_NO}}" readonly>
      </p>
      <br>
      <p>
        <b>building_NO :</b>
        <br>
      <input class="input" type="text" value="{{Auth::user()->building_NO}}" readonly>
      </p>
      <br>
      <p>
        <b>district :</b>
        <br>
      <input class="input" type="text" value="{{Auth::user()->district}}" readonly>
      </p>
    </div>
    </div>
      @foreach ($users as $i)
      @endforeach
    
     
<br>
    <a href="proedt/{{$i->id}}" class="btn btn-secondary mt-2">edit</a>
    <a href="prodel/{{$i->id}}" class="btn btn-danger mt-2">Delete</a>
    </tr>
   
    {{--
    <!--<td> {{link_to_route('useres.edit','Edit',$i,['class'=>'btn btn-success edit'])}}</td>-->
    <button class="btn btn-primary" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter2">
      {{ __('msg.edit')}} <span class="text-dark" style="margin-left:15%;"><i class="fas fa-edit text-light"></i></span>
    </button>
    <button class="btn btn-danger" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter1">
      {{ __('msg.delete')}} <span class="text-dark" style="margin-left:15%;"><i class="fas fa-trash-alt text-light"></i></span>
    </button>
    --}}
    <td></td>
    </tr>

  </div>
</div>



<style>
  ::-webkit-file-upload-button {
  border: 1px solid var(--primary-skyblue);
  background: var(--primary-skyblue);
  color: white;
  margin-bottom:10px;
  border-radius: 3px;  
  width:100px;
  height:50px;
}
</style>
@endsection
<!-- Content END -->