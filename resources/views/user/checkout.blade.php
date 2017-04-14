@extends('user.master')
@section('content')
<!-- Cart -->
<div class="col-md-9">
  <div class="col-md-12">
   <div class="cart">
    <table class="table">
      <div class="cart-title"><h3>Shopping Cart</h3></div>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Image</th>
          <th>Quantity</th>
          <th>Subtotal</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>ao dep</td>
          <td><img width="40px" src="1.png" alt=""></td>
          <td><input type="number" class="form-control text-center" value="1"></td>
          <td>20 USD</td>
          <td>
            <a href="" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
        </tr>
      </tbody>					      
    </table>
  </div>
  
  <!-- End Cart -->
</div>
<div class="col-md-9">
 <form class="form-horizontal" role="form">
  <h2 style="text-align:center">Checkout</h2>
  <div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-9">
      <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
      <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input type="email" id="email" placeholder="Email" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-9">
      <input type="date" id="birthDate" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="country" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-6">
     <input type="text" name="address" class="form-control">
   </div>
 </div> <!-- /.form-group -->
 <div class="form-group">
  <div class="col-sm-9 col-sm-offset-3">
    <input type="submit" class="btn btn-success" value="Confirm to buy!">
  </div>
</div>
</form> <!-- /form -->
</div> <!-- ./container -->

@endsection