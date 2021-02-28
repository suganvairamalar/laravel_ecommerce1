@extends('layouts.product_app')
@section('content')
<div class="custom-product">
 
  <div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>My Orders</h4>
       
          @foreach($orders as $item)         
          <div class="row searched-item cart-list-divider">
          <div class="col-sm-3">
            <a href="product_detail/{{$item->id}}">
            <img class="trending-image" src="{{$item->gallery}}">           
              </a>
          </div>
           <div class="col-sm-4">
              <h2>Name : {{$item->name}}</h2>
              <h3>Delivery Status : </h3><h5>{{$item->status}}</h5>
              <h3>Address : </h3><h5>{{$item->address}}</h5>
              <h3>Payment Status : </h3><h5>{{$item->payment_status}}</h5>
              <h3>Payment Method : </h3><h5>{{$item->payment_method}}</h5>
          </div>
          </div>
          @endforeach
    </div>
     
  </div>


</div>
@endsection