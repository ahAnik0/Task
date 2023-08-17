<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
       Category::saveCategory($request);
       return back()->with('message','Category Created Successfully');
    }

    public function manage()
    {

        return view('admin.category.manage',[
            'categories' => Category::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.category.edit',[
            'category' => Category::find($id)
        ]);
    }

    function update(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/category-manage')->with('message','Category Updated Successfully');
    }
    function delete(Request $request,$id)
    {
        Category::deleteCategory($id);
        return redirect('/category-manage')->with('message','Category Deleted Successfully');
    }



}
