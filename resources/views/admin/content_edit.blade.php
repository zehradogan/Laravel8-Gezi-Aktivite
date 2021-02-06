@extends('layouts.admin')

@section('title', 'Content edit')

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
                                    <li class="active">Content edit</li>
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
                                    <h4>Category edit</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="basic-form">
                                        <form action="{{route('admin_contents_update', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control select2" name="category_id" style="width: 100%">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}"@if ($rs->id == $data->parent_id) selected="selected" @endif >
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
                                                <label>detail</label>
                                                <textarea name="detail" id="editor1" value="{{$data->city}}">
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace( 'editor1' );
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label>city</label>
                                                <input type="text" name="city" value="{{$data->city}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>country</label>
                                                <input type="text" name="country" value="{{$data->country}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>image</label>
                                                <input type="file" name="image" value="{{$data->image}}" class="form-control input-focus">

                                                @if($data->image)
                                                    <img src="{{Storage::url($data->image)}}" height="30" alt="">
                                                @endif

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
                                                <button type="submit" class="btn btn-primary"> Update Content </button>
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
