@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(Session('flash'))
            <p style="text-align:center,color:red">{{Session('flash')}}</p>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Is_trending</th>
                        <th>summary</th>
                        <th>Description</th>
                        <th>SubCategory</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $product)
                    <tr class="odd gradeX" align="center">
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td><img src="uploads/products/images/{{$product->image}}" alt="" width="40px"></td>
                        <td>{{$product->price}}</td>
                        <td>@if(($product->is_trending) ==0)
                            {{"Normal"}}
                            @else
                            {{"Feature"}}
                            @endif
                        </td>
                        <td>{{$product->summary}}</td>
                        <td>{!! str_limit($product->description,100,'...') !!}</td>
                        <td>{{$product->subcategory->name}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$product->id}}" onclick="return confirm('Are you sure?')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$product->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection