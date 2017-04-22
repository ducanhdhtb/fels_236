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
					<td>Prd image</td>
					<th>Quantity</th>
					<th>Subtotal</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($content as $item)
				<tr id="{{$item->rowId}}">
					<td>{{ str_limit($item->name,'20','...') }}</td>
					<td> $ {!! $item->price !!}</td>
					<td><img width="40px" src="uploads/products/images/{{ $item->options->img }}" alt=""></td>
					<td><input type="number"  class="form-control text-center" value="{{ $item->qty }}"></td>
					<td> $ {{ ($item->qty)*($item->price) }}</td>
					<td>
						<a href="updatecart/{{ $item->rowId }}" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="deletecart/{{ $item->rowId }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
				@endforeach
				@if(count($content)==0)
				<tr><td colspan="5"><p>Your cart is empty.....</p></td>
					@endif
				</tbody>
				<tfoot>
					<tr>
						<td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
						<td colspan="2"></td>
						<td class="text-center"><strong>Total $ {{ $subtotal }}</strong></td>
						<td><a href="{{ route('checkout') }}" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	@endsection