@extends('layouts.admin')

@section('title', 'Category List')

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
                                    <li class="active">Blank</li>
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
                                    <h4>Categories</h4>

                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{route('admin_category_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                        </td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}"> <img src="{{asset('assets')}}/admin/images/edit.png" height="25"></a></td>
                                        <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"> <img src="{{asset('assets')}}/admin/images/delete.png" height="25"></a></td>
                                    </tr>

                                    </tbody>
                                    @endforeach

                                </table>
                            </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    <script src="{{asset('assets')}}/admin/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="{{asset('assets')}}/admin/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="{{asset('assets')}}/admin/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="{{asset('assets')}}/admin/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="{{asset('assets')}}/admin/js/lib/mmc-common.js"></script>
    <script src="{{asset('assets')}}/admin/js/lib/mmc-chat.js"></script>
    <script src="{{asset('assets')}}/admin/js/scripts.js"></script><!-- scripit init-->
@endsection
