<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Storage;


class ProductController extends Controller
{
    //List
    public function getList()
    {
        $product = Product::all();
    	return view('admin.product.list',compact('product'));
    }

    //Product
    public function getAdd()
    {
    	$category = Category::all();
    	$subcategory = SubCategory::all();
    	return view('admin.product.add',compact('category','subcategory'));
    }
    //Product Ajax
    public function Ajax($id)
    {
    	$subcategory = SubCategory::where('category_id',$id)->get();
    	foreach($subcategory as $subcategory)
    	{
    		echo "<option value='$subcategory->id'>$subcategory->name</option>";
    	}
    }
    // Product add
    public function postAdd(Request $request)
    {
        $this->validate($request,
            [
                'txtName' => 'required|unique:products,name'
            ],
            [
                'txtName.required' => 'Product name required!',
                'txtName.unique' => 'Product name exist!'
            ]);
        $product = new Product;
        $product->sub_category_id = $request->txtSubCategory;
        $product->name = $request->txtName;
        $product->price = $request->txtPrice;
        $product->is_trending = $request->txtTrending;
        $product->summary = $request->txtSummary;
        $product->description = $request->txtDescription;
        if($request->hasFile('txtImage'))
        {
            $file = $request->file('txtImage');
            $name = $file->getClientOriginalName();
        
            $file->move(public_path().'/uploads/products/images/',$name);
            $product->image = $name;
        }
        else
        {
            $product->image = "";
        }
        $product->save();
        return redirect()->back()->with('flash','Done !');
    }
    // Product delete
    public function getDelete($id)
    {
        $product = Product::find($id);
        //$file_path = public_path().'/uploads/products/images/'.$product->image;
        //unlink($file_path);
        $product->delete();
        return redirect()->back()->with('flash','Done');
    }
    // Product edit
    public function getEdit($id)
    {
        $category = Category::all();
        $subcategory = Subcategory::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','category','subcategory'));
    }
    public function postEdit(Request $request,$id)
    {
        $product = Product::find($id);
        $product->sub_category_id = $request->txtSubCategory;
        $product->name = $request->txtName;
        $product->price = $request->txtPrice;
        $product->is_trending = $request->txtTrending;
        $product->summary = $request->txtSummary;
        $product->description = $request->txtDescription;
        $product->save();
        return redirect()->back()->with('flash','Done !');
    }
}
