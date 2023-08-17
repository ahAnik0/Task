<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OthersImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.product.manage',[
        'products' => Product::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.index',[
            'categories'    => Category::all(),
            'subCategories' => SubCategory::all(),
            'units'         => Unit::all(),
            'brands'        => Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    private $product;
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        OthersImage::newOtherImage($request->file('others_image'),$this->product->id);
        return back()->with('message','Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',[
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product' => $product,
            'categories'    => Category::all(),
            'subCategories' => SubCategory::all(),
            'units'         => Unit::all(),
            'brands'        => Brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request,$product);

        if($request->file('others_image')){
            OthersImage::updateOtherImage($request,$product->id);
        }
        return redirect('/product')->with('message','Product Updatev Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        OthersImage::deleteOthersImage($product->id);
        return redirect('/product')->with('message','Product Deleted Successfully');
    }

    public function getSubCategoryByCategory(){
        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }

    private $message;
    public function updateStatus($id){
       $this->message = Product::updateFeaturedStatus($id);
        return back()->with('message',$this->message);
    }


}
