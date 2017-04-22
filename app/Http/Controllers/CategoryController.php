<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //List
    public function getList()
    {
    	$category = Category::all();
    	return view('admin.category.list',compact('category'));
    }
    //Delete
    public function getDelete($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	return redirect()->route('category.list')->with('flash','Delete Completely !');
    }
    //Add
    public function getAdd()
    {
        return view('admin.category.add');
    }
    public function postAdd(Request $request)
    {
         $this->validate($request,
            [
                'txtName' => 'required|unique:categories,name'
            ],
            [
                'txtName.required' => 'Please fill the input ',
                'txtName.unique' => 'Column exists !',
            ]);
        $category = new Category;
        $category->name = $request->txtName;
        $category->save();
        return redirect()->back()->with('flash','Add Successfully!');

    }
    //Edit
    public function getEdit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function postEdit(Request $request,$id)
    {   
        $this->validate($request,
            [
                'txtName' => 'required|unique:categories,name'
            ],
            [
                'txtName.required' => 'Please fill the input ',
                'txtName.unique' => 'Column exists !',
            ]);
        $category = Category::find($id);
        $category->name = $request->txtName;
        $category->save();
        return redirect()->back()->with('flash','Add Successfully!');
    }
}
