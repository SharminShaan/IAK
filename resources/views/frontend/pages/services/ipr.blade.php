@extends('frontend.layouts.master')
@section('title', 'IPR (Intellectual Property Rights) Service')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">IPR Service </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IPR </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}"
                alt="IAK IAK IPR (Intellectual Property Rights)  Service ">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}"
                alt="IAK IAK IPR (Intellectual Property Rights)  Service ">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- IAK IPR (Intellectual Property Rights)  Service -area -->
    <section class="text-justify">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-content-eleven">
                        <div class="section-title mb-30">
                            <h3 class="text-center"> IPR(Intellectual Property Rights) Service </h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row justify-content-center">

                @foreach ($iprs as $ipr)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                        <div class="">
                            <div class="border p-5">
                                <h4 class="title"> {{ $ipr->name }} </h4> <br>
                                <p> {{ $ipr->long_description }} </p>
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
    <!-- IAK IPR (Intellectual Property Rights)  Service area-end -->
@endsection
