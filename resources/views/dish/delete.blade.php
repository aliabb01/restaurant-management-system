
<!DOCTYPE html>
<html>
<head>
<title>Create a new dish </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('https://eatnorth.com/sites/default/files/styles/span9_thumbnail/public/field/image/ratafia_montreal_menu.jpg?itok=7x003ohe');background-repeat: no-repeat;  height: 100%;   background-size: cover;">
  <h3 style="text-align: center"> Delete the dish</h3>
<div class="container" style="margin-top:250px; ">

<form action="{{'/del2/'. $dishes->id }}" method="POST" >
  
    @method('delete')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          
       <div class="container text-center border pt-5" style="width:1500px;height:300px;background-color:transport;color:white;" >
      <h3>  Are you sure you want to delete this dish {{$dishes->title}}?<h3>
        <h4> After you click delete button the {{$dishes->title}} dish will be delete it from the list of the dish items  
        </h4>
     <div style="margin-top:120px; ">
          <button type="submit"  class="btn btn-primary mr-5">Delete</button>
          <a href="http://127.0.0.1:8000/dish" class="btn btn-danger ml-5" >back</a>
        </div>
        </div> 
    </form>

  </div>
</body>
</html>