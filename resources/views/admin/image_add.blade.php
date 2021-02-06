<html>
<head>
    <title>Image Gallery</title>
    <link href="{{asset('assets')}}/admin/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/css/lib/sidebar.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/nixon.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/lib/lobipanel/css/lobipanel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
</head>
<body>


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
                                    <h4> {{$data->title}} </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="basic-form">
                                        <form action="{{route('admin_image_store', ['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label>title</label>
                                                <input type="text" name="title" class="form-control input-flat">
                                            </div>

                                            <div class="form-group">
                                                <label>image</label>
                                                <input type="file" name="image" class="form-control input-focus">
                                            </div>


                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Add Category</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>images</th>
                                        <th>image Gallery</th>

                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="0" alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin_image_delete', ['id' => $rs->id, 'hotel_id'=>$data->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</a></td>
                                        </tr>

                                    </tbody>
                                    @endforeach

                                </table>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                    </div><!-- /# row -->
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

</body>
</html>
