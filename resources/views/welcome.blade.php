@extends('layouts.app')

@section('content')

<style>
    .btn-subscribe {
        background-color: aqua;
        color: black;
    }

    .btn-subscribe:hover {
        transition: 0.1s;
        background-color: black;
        color: aqua;
    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }
</style>

<div class="container">
    <h3>This is Home page</h3>


    <div class="container search-container text-center mt-5">
        <form class="" action="/result">
            <input class="pr-5 pl-5 pt-2 pb-2" type="text" placeholder="Search for dishes" name="search">
            <button class="btn btn-success pt-2 pb-2" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>




    <h4 class="text-center mt-5">
        section for subscribe
    </h4>
    @include('subscribe')

    <h4 class="text-center mt-5">
        section for feedback(it can be placed in footer also)
    </h4>
    @include('feedback')

</div>
@endsection