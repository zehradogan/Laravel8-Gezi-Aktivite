@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

@extends('layouts.home')

@section('title','References '. $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)




@section('content')



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>References</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>References</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blank page ======= -->
        <section id="References" class="References">
            <div class="container">

                {!!$setting->references!!}

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->



@endsection
