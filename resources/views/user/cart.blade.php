@extends('user.master')
@section('content')
<div class="col-md-9">
  <div class="cart">
    <table class="table">
      <div class="cart-title"><h3>Shopping Cart</h3></div>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>ao dep</td>
          <td><input type="number" class="form-control text-center" value="1"></td>
          <td>20 USD</td>
          <td>
            <a href="" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
        </tr>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        </tbody>
        <tfoot>
          <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="2"></td>
            <td class="text-center"><strong>Total 20 USD</strong></td>
            <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  @endsection