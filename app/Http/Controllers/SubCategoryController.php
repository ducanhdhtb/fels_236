<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    //List
    public function getList()
    {
    	$subcategory=SubCategory::all();
  
    	return view('admin.subCategory.list',compact('subcategory'));
    }
    //Add
    public function getAdd()
    {
    	$category = Category::all();
    	return view('admin.subCategory.add',compact('category'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    		[
    			'txtName' => 'required|unique:sub_categories,name'
    		],
    		[
    			'txtName.required' => 'Name must be filled !',
    			'txtName.unique' =>'Column exists!'
    		]);
    	$subcategory = new SubCategory;
    	$subcategory->name = $request->txtName;
    	$subcategory->category_id = $request->txtCategory;
    	$subcategory->save();
    	return redirect()->back()->with('flash','Add Successfully!');
    }
    //Delete
    public function getDelete($id)
    {
    	$subcategory = SubCategory::find($id);
    	$subcategory->delete();
    	return redirect()->back()->with('flash','Delete ok !');
    }
    // Edit
    public function getEdit($id)
    {
    	$category = Category::all();
    	$subcategory = SubCategory::find($id);
    	return view('admin.subCategory.edit',compact('category','subcategory'));
    }

    public function postEdit(Request $request,$id)
    {
    	$this->validate($request,
    		[
    			'txtName' => 'required|unique:sub_categories,name'
    		],
    		[
    			'txtName.required' => 'Name is required!',
    			'txtName.unique' =>'Name already exists!'
    		]);
    	$subcategory = SubCategory::find($id);
    	$subcategory->name = $request->txtName;
    	$subcategory->category_id = $request->txtCategory;
    	$subcategory->save();
    	return redirect()->back()->with('flash','Update Successfully!');
    }
}
