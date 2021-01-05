<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('assets')}}/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/css/lib/sidebar.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/lib/nixon.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/lib/lobipanel/css/lobipanel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>

<body>

@include('admin._sidebar')
@include('admin.header')
@include('admin._chat-sidebar')
@yield('content')


<script src="{{asset('assets')}}/admin/js/lib/jquery.min.js"></script>
<!-- jquery vendor -->
<script src="{{asset('assets')}}/admin/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="{{asset('assets')}}/admin/js/lib/sidebar.js"></script>
<!-- sidebar -->
<script src="{{asset('assets')}}/admin/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="{{asset('assets')}}/admin/js/lib/mmc-common.js"></script>
<script src="{{asset('assets')}}/admin/js/lib/mmc-chat.js"></script>
<!--  Chart js -->
<script src="{{asset('assets')}}/admin/js/lib/chart-js/Chart.bundle.js"></script>
<script src="{{asset('assets')}}/admin/js/lib/chart-js/chartjs-init.js"></script>
<!-- // Chart js -->
<!--  Datamap -->
<script src="{{asset('assets')}}/admin/js/lib/datamap/d3.min.js"></script>
<script src="{{asset('assets')}}/admin/js/lib/datamap/topojson.js"></script>
<script src="{{asset('assets')}}/admin/js/lib/datamap/datamaps.world.min.js"></script>
<script src="{{asset('assets')}}/admin/js/lib/datamap/datamap-init.js"></script>
<script src="{{asset('assets')}}/admin/lib/lobipanel/js/lobipanel.js"></script>
<!-- // Datamap -->
<script src="{{asset('assets')}}/admin/js/scripts.js"></script>
<!-- scripit init-->
<script>
    $(document).ready(function() {
        $('#lobipanel-custom-control').lobiPanel({
            reload: false,
            close: false,
            editTitle: false
        });
    });
</script>

</body>

</html>
