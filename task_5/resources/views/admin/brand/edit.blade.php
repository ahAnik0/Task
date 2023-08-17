@extends('admin.master')

@section('title')
   Brand Edit  
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Brand Edit</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Brand Name</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{session('message')}}</p>
                            <form class="needs-validation" method="POST" action="{{route('brand.update',$brand->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Brand Name</label>
                                        <input type="text" class="form-control" value="{{$brand->name}}" name="name" id="validationCustom13" required>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Choose Brand Image</label>
                                        <input type="file" accept="image/*" class="form-control" name="image" id="validationCustom13">
                                        <img src="{{asset($brand->image)}}" alt="" srcset="" height="50px" width="50px">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Status</label>
                                       <select name="status" class="form-control">
                                        <option value="1" {{$brand->status == 1 ? 'selected': ''}}>Active</option>
                                        <option value="0" {{$brand->status == 0 ? 'selected': ''}}>Inactive</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Description </label>
                                        <textarea type="text" class="form-control" name="description" placeholder="Brand Description" cols="20" rows="5" required>{{$brand->description}}</textarea>
                                        
                                    </div>
                                </div>
                                    
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection