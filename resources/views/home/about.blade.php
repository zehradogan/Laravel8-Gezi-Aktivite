@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.home')

@section('title','About Us - ' . $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)



@section('content')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blank page ======= -->
        <section id="About Us" class="About Us">
            <div class="container">

                {!!$setting->aboutus    !!}

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->


@endsection
