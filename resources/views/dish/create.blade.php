
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
<body style="background-image: url('https://blog.invaluable.com/blog/wp-content/uploads/2018/10/02-creative-color.png');background-repeat: no-repeat;  height: 100%;   background-size: cover;color:blue;">
  <h3 style="text-align: center;color:blue;"> Create a new dish</h3>
<div class="container ">

<form action="/store1" method="post">
  @csrf
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label for="id">id</label>
    <input type="text" class="form-control" name="id" >
    </div>
    <br>
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title" >
    </div>
    <br>
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="value" class="form-control" name="Description" >
    </div>
    <br>
    <div class="form-group">
      <label for="Price">Price</label>
      <input type="text" class="form-control" name="Price" >
    </div>
    <br>

    <div class="form-group">
      <label for="Calorie">calorie</label>
      <input type="text" class="form-control" name="Calorie" >
    </div>
    <br>
    <div class="form-group">
      <label for="image">image</label>
      <input type="text" class="form-control" name="image" >
    </div>
    <br>
    <div class="form-group">
      <label for="Category_name">Category_name</label>
      <br>
    <select name="Category_name" id="" style="width:200px;">
  
        @foreach ( $dishcategories  as $item)
            
      
        <option value="{{$item->id}}" >{{$item->Category_name}}</option>
        @endforeach
      </select>
    </div>
    <br>
 
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="http://127.0.0.1:8000/dish" class="btn btn-dark">Back</a>
    </form>
  </div>
</body>
</html>
  <style>
    .body{
      background-color:lightgreen;
    }
  </style>