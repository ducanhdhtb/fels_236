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
                        <th>Customer</th>
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Total money</th>
                        <th>detail</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $order)
                    <tr class="odd gradeX" align="center">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->customer->address }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->total." USD" }}</td>
                        <td><a href="admin/orderdetail/list/{{ $order->id }}">Read more</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/order/delete/{{$order->id}}" onclick="return confirm('Are you sure?')"> Delete</a></td>
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