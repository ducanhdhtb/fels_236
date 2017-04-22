@extends('user.master')
@section('content')
<div class="col-md-9">
	<div class="col-md-5">
		<div class="thumbnail">
			<img  src="uploads/products/images/{{ $prd_id->image }}" class="img-responsive"/>
		</div>
	</div>
	<div class="col-md-7">
		<h3>{{ $prd_id->name }}</h3>
		<em class="text-danger">{{ $prd_id->subcategory->name }}</em>
		<p class="text-justify" style="margin: 10px 0;">{!! $prd_id->summary !!}</p>
		<form class="form-inline">
			<div class="col-md-8">
				<label for="price"><h4>Price: <em class="text-info">$ {{ $prd_id->price }} USD</em></h4> </label>
			</div>
			<div class="col-md-4">
				<input style="width: 40%;" type="number" value="1" class="form-control"/>
			</div>
			<div class="col-md-offset-5 col-md-7">
				<a class="btn btn-warning btn-block" href="addcart/{{$prd_id->id}}"> Buy Now!</a>
			</div>
		</form>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
		</ul>
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>Hoàn trả</h3>
				<p class="text-justify">{!! $prd_id->description !!}
				</p>
			</div>
		</div>
	</div>
	<div id="facbook">

	</div><!--end facebook-->
	<div class="col-md-12">
		<div class="well">
			<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
			<form role="form">
				<div class="form-group">
					<textarea class="form-control" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Gửi</button>
			</form>
		</div>
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="http://placehold.it/64x64" alt="">
			</a>
			<div class="media-body">
				<h4 class="media-heading">Start Bootstrap
					<small>August 25, 2014 at 9:30 PM</small>
				</h4>
				Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			</div>
		</div>
	</div>
</div>


<div class="clearfix"></div>	
</div>
</div>
@endsection