<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index',[
            'categories' => Category::all()
        ]);
    }

    public function create(Request $request)
    {
        
       SubCategory::newSubCategory($request);
       return back()->with('message','Sub Category Created Successfully');
    }

    public function manage()
    {
        return view('admin.sub-category.manage',[
            'subCategories' => SubCategory::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.sub-category.edit',[
            'subCategory' => SubCategory::find($id),
            'categories' => Category::all()

        ]);
    }

    function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/sub-category-manage')->with('message','Sub Category Updated Successfully');
    }
    function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/sub-category-manage')->with('message','Sub Category Deleted Successfully');
    }
}
