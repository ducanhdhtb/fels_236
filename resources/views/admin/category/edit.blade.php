@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) > 0)
            @foreach($errors->all() as $errs)
            <div class="alert alert-danger">
                {{$errs}}
            </div>
            @endforeach
            @endif
            @if(Session('flash'))
            <div class="alert alert-danger">{{Session('flash')}}</div>
            @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/category/edit/{{$category->id}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Category Order" value="{{ $category->name }}" />
                    </div>
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <input type="reset" class="btn btn-default" value="reset">
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection