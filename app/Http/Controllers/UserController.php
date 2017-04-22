<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class UserController extends Controller
{
    //List
    public function getlist()
    {
    	$customer = Customer::all();
    	return view('admin.user.list',compact('customer'));
    	
    }
    // dit
    public function getDelete($id)
    {
    	$customer=Customer::find($id);
    	$customer->delete($id);
    	return redirect()->route('user.list')->with('flash','Delete Successfully!');
    }

}
