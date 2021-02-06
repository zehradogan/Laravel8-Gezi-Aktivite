@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard 1</h1>
                            </div>
                        </div>
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Edit Category</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Category Add</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="basic-form">
                                        <form action="{{route('admin_category_update', ['id' => $data->id])}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>parent id</label>
                                                <select class="form-control select2" name="parent_id" style="width: 100%">
                                                    <option value="0" >Main Category</option>
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control input-flat">
                                            </div>
                                            <div class="form-group">
                                                <label>keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control input-rounded">
                                            </div>
                                            <div class="form-group">
                                                <label>description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control input-focus">
                                            </div>
                                            <div class="form-group">
                                                <label>status</label>

                                                <select class="form-control select2" name="status"style="width: 100%">
                                                    <option selected="selected">{{$data->status}} </option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>

                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Category</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@endsection
