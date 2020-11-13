<form action="{{'/del2/'. $dishes->id }}" method="POST" >
  
    @method('delete')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <div class="form-group">
            <label for="id">id</label>
          <input type="text" class="form-control" name="id" value="{{$dishes->id}}">
          </div>
          <br>
          <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" value="{{$dishes->title}}">
          </div>
          <br>
          <div class="form-group">
            <label for="Description">Description</label>
            <input type="value" class="form-control" name="Description" value="{{$dishes->Description}}" >
          </div>
          <br>
          <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" name="Price" value="{{$dishes->Price}}">
          </div>
          <br>
          <div class="form-group">
            <label for="Calorie">Calorie</label>
            <input type="text" class="form-control" name="Calorie" value="{{$dishes->Calorie}}">
          </div>
          <br>
          <div class="form-group">
            <label for="image">image</label>
            <input type="text" class="form-control" name="image" value="{{$dishes->image}}">
          </div>
          <br>
          <div class="form-group">
            <label for="Category_name">Category_name</label>
            <input type="value" class="form-control" name="Category_name" value="{{$dishes->Category_name}}" >
          </div>
          <br>
        
         
          
          <button type="submit"  class="btn btn-primary">Delete</button>
          <a href="http://127.0.0.1:8000/" class="btn btn-danger" >back</a>
    </form>