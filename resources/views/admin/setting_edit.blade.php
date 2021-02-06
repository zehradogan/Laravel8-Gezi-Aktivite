@extends('layouts.admin')

@section('title', 'Setting edit')

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
                                        <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control input-flat">

                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control input-flat">
                                            </div>

                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control input-rounded">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>E mail</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Smtp server</label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Smtp email</label>
                                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Smtp password</label>
                                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Smtp port</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="Facebook" value="{{$data->Facebook}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="facebook" value="{{$data->instagram}}" class="form-control input-focus">
                                            </div>

                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control input-focus">
                                            </div>


                                            <div class="form-group">
                                                <label>About Us</label>
                                                <textarea name="aboutus" id="aboutus" value="{{$data->aboutus}}"></textarea><script>
                                                    CKEDITOR.replace( 'aboutus' );
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label>Contact</label>
                                                <textarea name="contact" id="contact" value="{{$data->contact}}"></textarea><script>
                                                    CKEDITOR.replace( 'contact' );
                                                </script>
                                            </div>

                                            <div class="form-group">
                                                <label>References</label>
                                                <textarea name="references" id="references" value="{{$data->references}}"></textarea>
                                                <script>
                                                    CKEDITOR.replace( 'references' );
                                                </script>
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
                                                <button type="submit" class="btn btn-primary"> Update Setting </button>
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
