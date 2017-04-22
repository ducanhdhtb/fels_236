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
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="admin/subcategory/edit/{{$subcategory->id}}" method="POST">
                   <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                   <div class="form-group">
                    <label>Category Parent</label>
                    <select class="form-control" name="txtCategory">
                        @foreach($category as $category)
                        <option
                        @if($category->id == $subcategory->category->id)
                        {{ "selected=selected" }}
                        @endif
                        value="{{ $category->id }}">{{$category->name}}</option>
                    }
                }
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Category Name" value="{{ $subcategory->name }}" />
        </div>
        <button type="submit" class="btn btn-default">SubCategory Update</button>
        <button type="reset" class="btn btn-default">Reset</button>
        <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
@endsection