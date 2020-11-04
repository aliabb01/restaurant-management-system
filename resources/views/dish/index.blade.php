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


                    tit {{ $dish->title }}

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

Here you can make modifaction for any dish .
<a href="#" class="btn btn-success">Create Dish</a>
<div>

    <br>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Dish_name</th>
                <th scope="col">Description</th>
                <th scope="col">price</th>
                <th scope="col">calorie</th>
                <th scope="col">image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dishes as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->title}}</td>
                <td>{{$i->Description}}</td>
                <td>{{$i->Price}}</td>
                <td>{{$i->Calorie}}</td>
                <td>{{$i->image}}</td>
                <td><a href="#" class="btn btn-primary"> EDit</a>
                </td>
                <td><a href="#" class="btn btn-danger"> EDit</a></td>


            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection