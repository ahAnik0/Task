@extends('admin.master')

@section('title')
   Unit Add   
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Unit Add</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Unit Add</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Unit Name</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-success">{{session('message')}}</p>
                            <form class="needs-validation" method="POST" action="{{route('unit.store')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Unit Name</label>
                                        <input type="text" class="form-control" name="name" id="validationCustom13" required>
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom13">Description </label>
                                        <textarea type="text" class="form-control" name="description" placeholder="Unit Description" cols="20" rows="5" required></textarea>
                                        
                                    </div>
                                </div>
                                    
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection