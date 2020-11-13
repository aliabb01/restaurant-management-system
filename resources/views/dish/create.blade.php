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
    <select name="Category_name" id="">
  
        @foreach ( $dishcategories  as $item)
            
      
        <option value="{{$item->id}}" >{{$item->Category_name}}</option>
        @endforeach
      </select>
    </div>
    <br>
 
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  