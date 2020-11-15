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
<div class="myprofile-main">
  <div class="container myprofile pt-5 pb-5">
    <h2 class="my-set text-center">my Profile </h2>
    <hr style="border-color:black;">
    <tr>
      <p>
        <b class="text-left">profile picture  :</b>
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
      @foreach ($users as $i)
         
      @endforeach
    
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" >Address details</button>
<br>
    <a href="prodel/{{$i->id}}" class="btn btn-secondary">edit</a>
    <a href="prodel/{{$i->id}}" class="btn btn-danger">Delete</a>
    </tr>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Address</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">city:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">street:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">zip_code:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Apartment.NO:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Building.NO:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">district:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send message</button>
            </div>
          </div>
        </div>
      </div>
  
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