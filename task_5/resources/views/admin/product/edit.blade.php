@extends('admin.master')

@section('title')
    Product Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Product Name</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('product.update',$product->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="category_id">Category Name</label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" @selected($category->id ==
                                                        $product->category_id)>{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="sub_category_id">Select Sub Category </label>
                                            <select name="sub_category_id" id="sub_category_id" class="form-control">
                                                <option value="">Select Sub Category</option>

                                            @foreach ($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}" @selected($subCategory->id ==
                                                    $product->sub_category_id)>{{ $subCategory->name }}</option>
                                            @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="brand_id">Brand Name</label>
                                            <select name="brand_id" id="brand_id" class="form-control">
                                                <option value="">Select Brand</option>

                                                @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}" @selected($brand->id ==
                                                    $product->brand_id)>{{ $brand->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="unit_id">Unit Name</label>
                                            <select name="unit_id" id="unit_id" class="form-control">
                                                <option value="">Unit Category</option>
                                                @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}" @selected($unit->id ==
                                                    $product->unit_id)>{{ $unit->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Product Name</label>
                                            <input type="text" name="name" value="{{$product->name}}" class="form-control">

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="code">Product Code</label>
                                            <input type="text" name="code" value="{{$product->code}}" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="product_price">Product Price</label>
                                            <div class="input-group">
                                                <input type="number" name="regular_price" value="{{$product->regular_price}}" class="form-control"
                                                    placeholder="Regular Price">
                                                <input type="number" name="selling_price" value="{{$product->selling_price}}" class="form-control"
                                                    placeholder="Selling price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="stock_status">Stock Status</label>
                                            <div class="input-group">
                                                <input type="number" name="stock_amount" value="{{$product->stock_amount}}" class="form-control"
                                                    placeholder="Stock Amount">
                                                <input type="number" name="reorder_label" value="{{$product->reorder_label}}" class="form-control"
                                                    placeholder="Reorder Label">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="product_image">Choose Product Image</label>
                                            <input type="file" accept="image/*" class="form-control" name="image"
                                                id="validationCustom13" >
                                                <img src="{{asset($product->image)}}" alt="" height="50" width="50">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="others_image">Others Image</label>
                                            <input type="file" accept="image/*" class="form-control"
                                                name="others_image[]" id="others_image" multiple>
                                                <br>
                                                @foreach ($product->othersImage as $otherImage )
                                                <img src="{{asset($otherImage->image)}}" alt="Product Others Image" width="50" height="50" srcset=""> &nbsp;
                                                    
                                                @endforeach

                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="short_description">Short Description </label>
                                            <textarea type="text" class="form-control" name="short_description" placeholder="Product Description"
                                                cols="20" rows="5" required>{{$product->short_description}}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="sumernote">Long Description </label>
                                            <textarea type="text" class="form-control" id="summernote" name="long_description"
                                                placeholder="Product Description" cols="20" rows="5" required>{{$product->long_description}}</textarea>

                                        </div>
                                    </div>
                            
                        
                        <button class="btn btn-primary" type="submit">Submit</button>
                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
