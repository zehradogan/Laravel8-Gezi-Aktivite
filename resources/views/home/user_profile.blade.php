@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
    @extends('layouts.home')

@section('title', 'User Profile')

@section('content')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>User</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blank page ======= -->
        <section id="User Profile" class="User Profile">
            <div class="container">
                <div class="row">
                    <div id="aside" class="col-md-2" >
                        @include('home.user_menu')
                    </div>

                    <div id="main" class="col-md-10">
                        @include('profile.show')
                    </div>
                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->


@endsection
