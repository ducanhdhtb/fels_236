@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if (Session('flash'))
                <div class="alert alert-success">
                    {{Session('flash')}}                                
                </div>
                @endif
                @if(count($errors) > 0)                         
                @foreach($errors->all() as $err)
                <div class="alert alert-danger">
                    {{ $err }}
                </div>
                @endforeach                            
                @endif
                <form action="admin/product/add" method="POST" enctype= multipart/form-data >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="txtCategory" id="category">
                            <option value="0" disabled="true" selected="true">Pls choosse select category</option>;
                            @foreach($category as $category)
                            <option value="{{ $category->id }}">{{$category -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SubCategory</label>
                        <select class="form-control" name="txtSubCategory" id="subcategory">
                            <option value="0" disabled="true" selected="true">Pls choosse sub category</option>;
                        </select>
                    </div>
                    <script>
                        $(document).ready(function(){
                            $('#category').change( function() {
                                var categoryId = $(this).val();
                                        //alert(categoryId);
                                        $.get("admin/product/ajax/"+categoryId,function(data){
                                            $("#subcategory").html(data);
                                        });
                                    });
                        });
                    </script>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="txtPrice" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea class="form-control" rows="3" name="txtSummary"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="txtImage">
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea rows="3" id="demo" class="form-control ckeditor" name="txtDescription" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Product Status</label>
                        <label class="radio-inline">
                            <input name="txtTrending" value="0" checked="" type="radio">Normal
                        </label>
                        <label class="radio-inline">
                            <input name="txtTrending" value="1" type="radio">Feature
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection