@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
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
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/product/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="txtCategory" id="category">
                            @foreach($category as $category)
                            <option
                            @if($product->subCategory->category->id == $category->id)
                            {{"selected"}}
                            @endif
                            value="{{ $category->id }}">{{$category -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>SubCategory</label>
                        <select class="form-control" name="txtSubCategory" id="subcategory">
                            @foreach($subcategory as $subcategory)
                            <option
                            @if($product->subcategory->id == $subcategory->id)
                            {{"selected"}}
                            @endif
                            value="{{$subcategory->id}}">{{$subcategory->name}}</option>;
                        }
                    }
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{{$product->name}}" />
            </div>
            <div class="form-group">
                <label>Price</label>
                <input value="{{$product->price}}"  class="form-control" name="txtPrice" placeholder="Please Enter Password" />
            </div>
            <div class="form-group">
                <label>Summary</label>
                <textarea  class="form-control" rows="3" name="txtSummary" >{{$product->summary}}</textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea id="demo" class="form-control ckeditor" rows="3" name="txtDescription">{!! $product->description !!}</textarea>
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="txtImage">
            </div>
            <div class="form-group">
                <label>Product Status</label>
                <label class="radio-inline">
                    <input name="txtTrending" value="1" checked="" type="radio">Feature
                </label>
                <label class="radio-inline">
                    <input name="txtTrending" value="0" type="radio">Normal
                </label>
            </div>
            <button type="submit" class="btn btn-default">Product Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection