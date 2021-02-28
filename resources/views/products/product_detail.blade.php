@extends('layouts.product_app')
@section('content')
<div class="container">
	<div class="row">
      <div class="col-sm-6">
        <img class="detail-img" src="{{$product_detail['gallery']}}">
      </div>
      <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h2>{{$product_detail['name']}}</h2>
        <h3>Price : {{$product_detail['price']}}</h3>
        <h4>Details: {{$product_detail['description']}}</h4>
        <h4>Category: {{$product_detail['category']}}</h4>
        <br><br>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$product_detail['id']}}">
          <button class="btn btn-primary">Add To Cart</button>
        </form>
        
        <br><br>
        <button class="btn btn-success">Buy Now</button>
      </div>
  </div>
</div>
@endsection