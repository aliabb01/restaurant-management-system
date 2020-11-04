@extends('layouts.app')
@section('content')
    <!-- Default form register -->
<form class="text-center p-5 text-light" action="#!" style="background-color:#394867;">

    <p class="h3 mb-4">FeedBack </p>
    <p class="h4 mb-4">We are continually striving to improve our services, any comments and feedback would be gratefully appreciated! </p>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <textarea id="defaultRegister" class="form-control mb-4" cols="30" rows="10"  placeholder="Feedback">
       </textarea>
    

    <a href="/welcome" class="btn btn-info my-4 btn-block sumbit"> Submit</a>

 

   
    
    <hr>

    

</form>
<style>
    .sumbit:hover{
        background-color:darkred;
    }
    body {
  overflow: hidden; /* Hide scrollbars */
}
</style>
@endsection