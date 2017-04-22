@extends('user.master')
@section('content')
<!-- Cart -->
<div class="col-md-9">
  @if(Cart::count() > 0 )
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
        @foreach($content as $item)
        <tr >
          <td>{{ str_limit($item->name,'20','...') }}</td>
          <td> $ {{ $item->price }}</td>
          <td><img width="40px" src="uploads/products/images/{{ $item->options->img }}" alt=""></td>
          <td><input type="number"  class="form-control text-center" value="{{ $item->qty }}"></td>
          <td> $ {{ ($item->qty)*($item->price) }}</td>
          <td>
            <a href="updatecart/{{ $item->rowId }}" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="deletecart/{{ $item->rowId }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
        </tr>
        @endforeach
        <tr>
          <td colspan="4" ></td>
          <td  ><strong>Total $ {{ $subtotal }}</strong></td>
        </tr>
      </tbody>					      
    </table>
  </div>

  <!-- End Cart -->
</div>
<div class="col-md-9">
 <form action="{{route('post.checkout')}}"  class="form-horizontal" role="form" method="post" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <h2 style="text-align:center">Checkout</h2>
  <div class="form-group">
    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
    <div class="col-sm-9">
      <input name="txtName" type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
      <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-9">
      <input name="txtEmail" type="email" id="email" placeholder="Email" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="country" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-6">
      <input name="txtPhone" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group">
    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
    <div class="col-sm-9">
      <input name="txtBirthday" type="date" id="birthDate" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="country" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-6">
     <textarea style="width: 448px" rows="10" name="txtAddress" type="text" name="address" class="form-control" ></textarea>
   </div>
 </div> <!-- /.form-group -->

 <div class="form-group">
  <div class="col-sm-9 col-sm-offset-3">
    <input style="font-weight: bold" type="submit" class="btn btn-danger" value="Confirm to buy!">
  </div>
</div>
</form> <!-- /form -->
@endif
</div> <!-- ./container -->

@endsection