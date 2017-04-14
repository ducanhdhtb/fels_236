@extends('user.master')
@section('content')
<div class="col-md-9">
	<h2>Horizontal Form</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
                <input type="password" class="form-control" placeholder="Password">
            </div>   
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">    
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="" class="btn btn-success">Login with Facebook</a>
                <a href="" class="btn btn-danger">Login with Google</a>
            </div>
        </div>    
    </form>  
</div>
@endsection