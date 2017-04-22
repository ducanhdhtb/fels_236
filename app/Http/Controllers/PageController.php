<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use App\User;
use Hash;
use App\Models\Category;
use App\Models\Product;

class PageController extends Controller
{
    function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }
    //Index
    public function index()
    {
        $category = Category::all();
        $product = Product::orderBy('id','desc')->paginate(8);
        $product_trend =  Product::where('is_trending','1')->paginate(8);
        return view('user.index',compact('category','product','product_trend'));
    }
    //Show Register
    public function getRegister()
    {
    	return view('user.register');
    }
    // Process Register
    public function postRegister(Request $request)
    {
    	$this->validate($request,
    		[
    			'txtName' => 'required|min:6|max:32',
    			'txtEmail' => 'required|unique:customers,email',	
    			'txtPassword' => 'required|min:6|max:32',
    			'txtRe-password' => 'required|same:txtPassword|min:6|max:32',
    			'txtBirthday' => 'required',
    			'txtAddress' => 'required|min:6',
    			'txtAvartar' => 'required'
    		],
    		[
    			'txtName.required' => 'Please input your name !',
    			'txtName.min' => 'Input name must has over 6 characters',
    			'txtName.max' => 'Input name must has under 32 characters',
    			'txtEmail.required' => 'Pls input your email ! ',
    			'txtEmail.unique' => 'Email exists !',
  				'txtPassword.required'=> 'Password is not empty!',
    			'txtPassword.min' => 'Password must has over 6 characters',
    			'txtPassword.max' => 'Password must has under 32 characters',
    			'txtRe-psassword.same' => 'Password must same !',
    			'txtAddress.required' => 'Pls input your address! ',
    			'txtAvartar.required' => 'Pls choose avartar',
    		]
    	);

    	$customer = new Customer;
    	$customer->name = $request->txtName;
    	$customer->email= $request->txtEmail;
    	$customer->password=  Hash::make($request->txtPassword);
    	$customer->address = $request->txtAddress;
    	$customer->birthday =$request->txtBirthday;
    	if($request->hasFile('txtAvartar'))
    	{
    		$file = $request->file('txtAvartar');
    		$name = $file->getClientOriginalName();
    		$file->move('uploads/avartar',$name);
    		$customer->avartar = $name;
    	}
    	else
    	{
    		$customer->avartar = "";
    	}
    	$customer->save();
    	return redirect()->back()->with('flash','Congratulation You have a new account!');

    }

    //Form login
    public function getLogin()
    {
    	return view('user.login');
    }
    //Process login
    public function postLogin(Request $request)
    {
        if(Auth::guard('customers')->attempt(['email'=>$request->txtEmail, 'password'=>$request->txtPassword]))
        {
            return redirect()->route('index');
        }        
        else
        {
            return redirect()->route('get_login')->with('flash','Sign in Failed!');
            
        }

    }
    //Spend for logout
    public function logout()
    {
        Auth::guard('customers')->logout();
        return redirect()->route('index');

    }
}
