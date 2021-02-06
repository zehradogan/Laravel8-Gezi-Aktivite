@php
$parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{route('home')}}">Travel &amp; See</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets')}}/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>

                @foreach($parentCategories as $rs)
                <li class="drop-down"><a href="">{{$rs->title}}</a>
                    @if(count($rs->children))
                        @include('home.categorytree', ['children'=>$rs->children])
                    @endif
                </li>
                @endforeach

                <li>
                    @auth()
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">

                        <strong class="text-uppercase">{{Auth::user() -> name}}<i class="fa fa-caret-down"></i></strong>
                    </div>


                            <li><a href="{{route('logout')}}" class="d-block">Logout</a></li>

                    @endauth
                    @guest()
                        <a href="{{route('adminlogin')}}">Login</a> / <a>Sign in</a>
                        @endguest

                </li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
