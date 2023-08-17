@extends('admin.master')

@section('title')
   Unit Manage  
@endsection

@section('content')
 <!--app-content open-->
 <div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Unit Data Tables</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Unit Datatable</h3>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <p class="text-success">{{session('message')}}</p>
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No.</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$unit->name}}</td>
                                <td>{{$unit->description}}</td>
                                <td>{{$unit->status ==1?'Active':'Inactive'}}</td>
                                <td class="d-flex">
                                    <a href="{{route('unit.edit',$unit->id)}}" class="btn btn-primary">
                                        <i class="fa fa-edit"> Edit </i>
                                    </a>
                                    &nbsp;&nbsp;
                                    <form action="{{route('unit.destroy',$unit->id)}}" method="Post">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete !!')">
                                        <i class="fa fa-trash"> Delete </i>
                                    </button>

                                    </form>
                                    
                                </td>
                                
                            </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection