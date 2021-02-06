<!-- Vendor CSS Files -->
<link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/venobox/venobox.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
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
                                    @include('home.message')

                                    <div class="basic-form">
                                        <form action="{{route('admin_message_update', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <table class="table table-responsive">

                                                <tr>
                                                    <th>Id</th> <td>{{$data->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th> <td>{{$data->name}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Email</th>  <td>{{$data->email}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Phone</th> <td>{{$data->phone}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Subject</th> <td>{{$data->subject}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Message</th> <td>{{$data->message}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Admin Note</th>
                                                    <td>
                                                        <textarea name="note" id="note" value="{{$data->note}}"></textarea>
                                                        <script>
                                                            CKEDITOR.replace( 'note' );
                                                        </script>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary"> Update Content </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

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

