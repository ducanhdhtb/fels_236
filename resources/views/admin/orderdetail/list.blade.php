@extends('admin.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Order id</th>
                        <th>Quantity</th>
                        <th>Product id</th>
                        <th>Created at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderdetail as $orderdetail)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $orderdetail->order_id }}</td>
                        <td>{{ $orderdetail->quantity }}</td>
                        <td>{{ $orderdetail->id }}</td>
                        <td>{{ $orderdetail->created_at }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="" onclick="return confirm('Are you sure?')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
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