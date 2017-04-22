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
    <form class="form-horizontal" role="form" action="{{ route('post_register') }}" enctype='multipart/form-data' method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h2 style="text-align:center">Registration Form</h2>
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
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input name="txtPassword" type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div> 
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Re-password</label>
            <div class="col-sm-9">
                <input name="txtRe-password" type="password" id="password" placeholder="Password" class="form-control">
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
                <input name="txtAddress" type="text" name="address" class="form-control">
            </div>
        </div> <!-- /.form-group -->
        <!-- Avartar -->
        <div class="form-group">
            <label class="control-label col-sm-3">Your Picture</label>
            <div class="col-sm-6">
                <input type="file" name="txtAvartar">
            </div>	
        </div>
        <!--End Avartar -->
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-danger btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->
@endsection