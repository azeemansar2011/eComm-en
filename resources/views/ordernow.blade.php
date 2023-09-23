@extends('master')
@section("content")

<div class="container custom-cartlist">
<table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs.{{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>Rs.10</td>
      </tr>
      <tr>
        <td>Total Amoutn</td>
        <td>Rs.{{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
    <form action="">
        <div class="form-group">
            <textarea type="email" class="form-control" placeholder="Enter your address" id="email"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment Method</label><br>
            <input type="radio" name="payment"><span> Online Payment</span><br>
            <input type="radio" name="payment"><span> EMI Payment</span><br>
            <input type="radio" name="payment"><span> Payment on Delivery</span><br>
        </div>
        <button type="submit" class="btn btn-success">Order Now</button>
    </form>

  </div>
</div>
@endsection