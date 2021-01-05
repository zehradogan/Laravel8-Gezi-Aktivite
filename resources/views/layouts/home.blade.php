<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Abril+Fatface:400,700" rel="stylesheet">

    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Zehra Doğan" />

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fancybox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animsition.min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <!--
    //////////////////////////////////////////////////////

    Free Template
    DESIGNED & DEVELOPED by free-template.co

    Website:    https://free-template.co
    Email:      freetemplate.co@gmail.com
    Twitter:    https://twitter.com/Free_Templateco
    Facebook:   https://www.facebook.com/Free.Template.co/

    //////////////////////////////////////////////////////
     -->


</head>
<body>

<div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">
    @include('home._header')
    @include('home._sections')
    @include('home._footer')
</div>

<script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('assets')}}/js/animsition.min.js"></script>
<script src="{{asset('assets')}}/js/aos.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>
