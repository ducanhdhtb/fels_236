@extends('user.master')
@section('content')
<div class="col-md-9">
    <form class="form-horizontal" role="form">
        <h2 style="text-align:center">Registration Form</h2>
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
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div> <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Re-password</label>
        <div class="col-sm-9">
            <input type="password" id="password" placeholder="Password" class="form-control">
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
 <!-- Avartar -->
 <div class="form-group">
    <label class="control-label col-sm-3">Your Picture</label>
    <div class="col-sm-6">
     <input type="file" name="avartar">
 </div>	
</div>
<!--End Avartar -->
<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3">
        <button type="submit" class="btn btn-success btn-block">Register</button>
    </div>
</div>
</form> <!-- /form -->
</div> <!-- ./container -->
@endsection