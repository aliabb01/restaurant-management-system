@extends('layouts.app')

@section('content')

<table id="t01">
    <tr>
      <th>Number</th>
      <th>Order_Date</th>
      <th>Add_review</th>
    </tr>
    <tr>
        
      <td>1</td>
      <td>Jackson</td>
      <td><a href="/order-reviews" class="btn btn-danger">Review</a></td>
    </tr>
  </table>


@endsection
<style>
#t01 {
  width: 100%;
  background-color: #f1f1c1;
}
</style>