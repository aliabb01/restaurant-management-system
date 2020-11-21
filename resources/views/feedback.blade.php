@extends('layouts.app')
@section('content')

<style>
    .feedback-form {
        background-image: url(images/feedback_comment.svg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: aqua;
    }
</style>
<!-- Default form register -->
<form class="text-center p-5 feedback-form" action="/feedback-store" method="POST">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <p class="h3 mb-4">Feedback </p>

    <p class="h4 mb-4 pt-5">We are continually striving to improve our services, any comments and feedback would be
        gratefully appreciated! </p>
    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->

            <input type="hidden" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name"
                name="user_id" value="{{ Auth::user()->id}}" style="width:60px;">
            <br>

        </div>

    </div>

    <!-- E-mail -->

    <textarea name="body" id="" cols="80" rows="10" style="resize: none;" required></textarea>
    <br>
    <button class="btn btn-primary border text-light"> Submit</button>


    <hr>

</form>

<div class="container comments mt-5 mb-5">
    <h3>
        <p style="font-style: oblique;">Comments:<p>
    </h3>
    @foreach($feeds as $i)
    <hr>
    <div class="media ml-2">
        <div class="media-body">
            <h5 class="mt-0 media-heading">


            </h5>

            <p> Comment by {{$i->user_id}}</p>
            <p>{{$i->body}}</p>
            Date: {{ date('d M Y') }}



        </div>
    </div>
    @endforeach
</div>
@endsection