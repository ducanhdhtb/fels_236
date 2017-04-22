@extends('master')
@section('content')
<div class="col-md-9">
   @if (count($errors) > 0)
   <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if(Session('flash'))
<div class="alert alert-success">
    {{ Session('flash') }}
</div>
@endif
<h2 style="text-align:center;color:green">Form Login</h2>
<form class="form-horizontal" action="{{ route('post_login') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
            <input type="email" class="form-control" placeholder="Email" name="txtEmail">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
            <input type="password" class="form-control" placeholder="Password" name="txtPassword">
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