<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use Cart;
use DateTime;
use Mail;

class IndexController extends Controller
{
  function __construct(){
     $category = Category::all();
     view()->share('category',$category);
 }
    //Take subcategory
 public function getsubcategory($id)
 {
   $product = Product::where('sub_category_id',$id)->paginate(8);
   return view('user.category',compact('product'));
}
    //Product detail 
public function productdetail($id)
{
   $prd_id = Product::find($id);
   return view('user.detail',compact('prd_id'));
}
      //Show cart
public function showcart()
{
   $subtotal = Cart::subtotal();
   $content = Cart::content();
    	//dd($content);
   return view('user.cart',compact('content','subtotal'));
}
    //Add an item in your cart
public function addcart($id)
{
   $prd = Product::find($id);
   Cart::add( array('id' => $id, 'name' => $prd->name, 'qty' => '1', 'price' => $prd->price, 'options' => array('img'=> $prd->image)) );
   $subtotal = Cart::subtotal();
   $content = Cart::content();
    	//dd($content);
    	//return view('user.cart',compact('content','subtotal'));
   return redirect()->route('cart');

}
    //Remove an item from cart
public function deletecart($id)
{
   $subtotal = Cart::subtotal();
   $content = Cart::content();
   Cart::remove($id);
    	//return  view('user.cart',compact('subtotal','content'))->with('flash','Remove an item from cart');
   return redirect()->route('cart');
}
    //Checkout
public function checkout()
{
    $subtotal = Cart::subtotal();
    $content = Cart::content();
    return view('user.checkout',compact('content','subtotal'));
}
    //Checkout -database
public function postcheckout(Request $request)
{
        //Save user
    $customer = new Customer;
    $customer->name = $request->txtName;
    //$customer->email = $request->txtEmail;
    $customer->address = $request->txtAddress;
    $customer->birthday = $request->txtBirthday;
    $customer->phone = $request->txtPhone;
    $customer->save();
        // Save order
    $order = new Order;
    $order->order_date = new DateTime();
    $order->customer_id = $customer->id;
    $order->total = Cart::subtotal('2','.',"");

    $order->save();
        // Save order detail

    $content = Cart::content();
    foreach($content as $item)
    {
        $orderDetail = new OrderDetail;
        $orderDetail->quantity = $item->qty;
        $orderDetail->order_id = $order->id;
        $orderDetail->product_id = $item->id;
        $orderDetail->save();
    }
    //dd($content);
    // Xu ly gui mail
    $data=['email'=>$request->txtEmail,
    'phone' =>$request->txtPhone,
    'name' => $request->txtName,
    'avartar' => $customer->avartar,
    'address' => $customer->address,
    'email' => $request->txtEmail,
    'date_order' => $order->order_date->format('d/m/Y'),
    'order_total' => $order->total,
    'order_id' => $orderDetail->order_id,
    'content' => $content,
    //'pathToImage' => public_path()."/uploads/products/images/",
    'total' => $order->total,
    ];
    Mail::send('user.mail',$data,function($message) use($request){
        $message->from('ducanhdhtb@gmail.com','Duc-anh');
        $message->to($request->txtEmail,'Order customer ')->to('ducanhdhtb@gmail.com','Order customer ')->subject('Bill details of customer ! ');
    });
    Cart::destroy();
    return redirect()->route('complete')->with('flash','Order has been sent successfully!');
  }
  public function complete(){
    return view('user.complete');
  }
}
