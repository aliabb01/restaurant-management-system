@extends('layouts.master')


@section('content')
{{--}}
    <div class="container">
        

        <section>
           
        @if( session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
            <div class="row">
               
            @foreach( $dishes as $dish)
                
                <div class="col-md-4">
                
                    <div class="card mb-2">
                            
                            
                           tit   {{ $dish->title }}
                               
                                 {{ $dish->price }}
                                <a href="{{ route('cart.add',$dish)}}" class="btn btn-primary"> Buy</a>
                                {{print_r(session()->get('cart'))}}
                            </div>
                    </div>
                    
               
                @endforeach
               
            </div>
            
        </section>
    </div>
    --}}
 <br>
 <br>

 Here you  can make modifaction for any dish .
 <a href="#" class="btn btn-success">Create Dish</a>
 <div>
 <table class="n" style="border:100%">
    <tr>
     <th>Dish_name</th>
     <th>Description</th>
     <th>amount</th>
     <th>price</th>
     <th>calorie</th>
     <th>popularity</th>
     <th>image</th>
     <th>Edit</th>
     <th>Delete</th>
     </tr>
     <tr>
        
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
         <td>--</td>
        <td><a href="#" class="btn btn-danger">EDit</a></td>
        <td><a href="#" class="btn btn-danger">Delete</a></td>
      </tr>
  </table>
</div>
    @endsection