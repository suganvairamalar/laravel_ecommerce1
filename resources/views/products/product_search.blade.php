@extends('layouts.product_app')
@section('content')
<div class="custom-product">
	<div class="col-sm-4">
    <a href="">Filter</a>
  </div>
  <div class="col-sm-4">
    <div class="trending-wrapper">
        <h4>Result For Products</h4>
          @foreach($product_search as $item)
          <div class="searched-item">
            <a href="product_detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
              <h2>{{$item['name']}}</h2>
              <h5>{{$item['description']}}</h5>
            </div>
              </a>
          </div>
          @endforeach
    </div>
  </div>


</div>
@endsection