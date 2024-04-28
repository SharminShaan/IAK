@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Training & Development
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Training & Development</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="Training & Development">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="Training & Development">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- training - development -area -->
    <section class="">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-12">
                    <h3 class="text-center">Training & Development </h3>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($training as $train)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                        <div class="">
                            <div class="border p-5">
                                @isset($train->logo)
                                    <img src="{{ asset('/backendsite/servicelogo/' . $train->logo) }}"
                                        alt="Training & Development">
                                @endisset
                                <h4 class="title"> Training Name: {{ $train->name }} </h4> <hr> <br>
                                <p> {{ $train->long_description }} </p>
                                <div class="overlay-icon">
                                    <i class="flaticon-healthcare"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--training- development-area-end -->
@endsection
