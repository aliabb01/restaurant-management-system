@extends('layouts.master')


    

@section('content')


<div class="container">
  <div class="row">
      <div class="col-md-9">
         
          <div class="card mb-3">
              <div class="card-body">
                 
                  <table class="table table-striped mt-2 mb-2">
                      <thead>
                          <tr>
                              
                              <th scope="col">Client</th>
                              <th scope="col">review</th>
                              <th scope="col">qulity_point</th>
                              <th scope="col">Delete</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                       
                        @foreach($reviews as $i)
                          <tr>
                           
                            <td >{{$i->user_id}}</td>
                            <td>{{$i->body}}</td>
                            <td>{{$i->quality}}</td>
                              
                              <td><a href="/delete/{{$i->id}}" class="btn btn-danger">Delete Review</a></td>
                          </tr>
                         
                      </tbody>
                  </table>
                
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>




@endsection