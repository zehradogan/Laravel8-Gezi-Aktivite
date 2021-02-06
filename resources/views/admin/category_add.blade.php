@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')

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
                                    <li class="active">Category Add</li>
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
                                        <form action="{{route('admin_category_create')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>Parent Category</label>
                                                <select class="form-control select2" name="parent_id" style="width: 100%">
                                                    <option value="0" selected="selected">Ana Kategori</option>
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>title</label>
                                                <input type="text" name="title" class="form-control input-flat">
                                            </div>
                                            <div class="form-group">
                                                 <label>keywords</label>
                                                <input type="text" name="keywords" class="form-control input-rounded">
                                            </div>
                                            <div class="form-group">
                                                <label>description</label>
                                                <input type="text" name="description" class="form-control input-focus">
                                            </div>
                                            <div class="form-group">
                                                <label>status</label>

                                                <select class="form-control select2" name="status" style="width: 100%">
                                                    <option selected="selected">False</option>
                                                    <option>True</option>
                                                </select>

                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Add Category</button>
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
