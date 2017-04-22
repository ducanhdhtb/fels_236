<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    //
    public function getList()
    {
    	$order = Order::all();
    	$orderdetail = OrderDetail::all();
    	return view('admin.order.list',compact('order','orderdetail'));
    }
    public function getDelete($id)
    {
    	$order = Order::find($id);
    	$order->delete();
    	return redirect()->back()->with('flash','Order was deleted successfully!');
    }
}
