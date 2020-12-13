<!DOCTYPE html>
<html>

<head>
    <title> @yield('title') </title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description') ">
    <meta name="author" content="Zehra Doğan">
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>
    @include('home._header');


    @include('home._banner');


    @section('content')

    @show

    @include('home._testimonials');
    @include('home._footer');
    @yield('footerjs');
</body>

</html>
