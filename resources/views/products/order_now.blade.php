@extends('layouts.product_app')
@section('content')
<div class="custom-product">
 
  <div class="col-sm-10">
    <table class="table">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>       
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>        
      </tr>
      <tr>
        <td>Total AMount</td>
        <td>$ {{$total+10}}</td>        
      </tr>
    </tbody>
  </table>
     <div>
       <form action="/order_place" method="POST">
        @csrf
          <div class="form-group">      
           <label for="pwd">Delivery Address:</label>     
            <textarea name="address" class="form-control" placeholder="enter your address"></textarea>
          </div>
          <div class="form-group">
            Payment Method:
            <label class="radio-inline" for="pwd"></label><br><br>
            <input type="radio"  value="cash" name="payment_method"><span>&nbsp;&nbsp;online payment</span><br><br>
            <input type="radio"  value="cash" name="payment_method"><span>&nbsp;&nbsp;emi payment</span><br><br>
            <input type="radio"  value="cash" name="payment_method"><span>&nbsp;&nbsp;Payment on delivery</span><br><br>
          </div>
          
          <button type="submit" class="btn btn-default">Order Now</button>
       </form>
     </div>
  </div>


</div>
@endsection