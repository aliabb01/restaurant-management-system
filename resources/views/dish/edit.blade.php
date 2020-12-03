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
<body style="background-image: url('https://www.evasolo.com/contentassets/d1fb5e43847045a9a9d7cf8d58ddc323/887262-legio-nova-round-serving-dish-35cm_square_886x886.jpg');background-repeat: no-repeat;  height: 100%;   background-size: cover;color:blue;">
  <h3 style="text-align: center"> Edit a dish information</h3>
<div class="container ">
<form action="{{'/upd1/'. $dishes->id }}" method="POST" >
   
    @method('PUT')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
          <div class="form-group">
            <label for="id">id</label>
          <input type="text" class="form-control" name="id" value="{{$dishes->id}}">
          </div>
          <br>
          <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" value="{{$dishes->title}}" required>
          </div>
          <br>
          <div class="form-group">
            <label for="Description">Description</label>
            <input type="value" class="form-control" name="Description" value="{{$dishes->Description}}" required>
          </div>
          <br>
          <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" name="Price" value="{{$dishes->Price}}" required>
          </div>
          <br>
          <div class="form-group">
            <label for="Calorie">Calorie</label>
            <input type="value" class="form-control" name="Calorie" value="{{$dishes->Calorie}}"  required>
          </div>
          <br>
          <button type="submit"  class="btn btn-primary">update</button>
    </form>

  </div>
</body>
</html>