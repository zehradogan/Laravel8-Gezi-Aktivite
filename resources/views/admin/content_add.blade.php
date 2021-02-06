@extends('layouts.admin')

@section('title', 'Content Add')


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
                                    <li class="active">Content Add</li>
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
                                        <form action="{{route('admin_contents_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control select2" name="parent_id" style="width: 100%">
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
                                                <label>detail</label>

                                                <textarea name="detail" id="editor1" >
                                                </textarea>
                                                <script>
                                                    // Replace the <textarea id="editor1"> with a CKEditor 4
                                                    // instance, using default configuration.
                                                    CKEDITOR.replace( 'editor1' );
                                                </script>

                                            </div>

                                            <div class="form-group">
                                                <label>city</label>
                                                <input type="text" name="city" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>country</label>
                                                <input type="text" name="country" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>image</label>
                                                <input type="file" name="image" class="form-control input-focus">
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
