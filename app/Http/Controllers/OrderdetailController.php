<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderdetailController extends Controller
{
    //
    public function getList()
    {
    	$orderdetail = OrderDetail::all();
    	return view('admin.orderdetail.list',compact('orderdetail'));
    }
}
