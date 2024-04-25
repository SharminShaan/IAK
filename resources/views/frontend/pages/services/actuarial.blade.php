@extends('frontend.layouts.master')
@section('title', 'Actuarial Service')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">IAK Actuarial Service </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IAK Actuarial Service </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="IAK IAK Actuarial Service ">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="IAK IAK Actuarial Service ">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- IAK Actuarial Service -area -->
    <section class="text-justify">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content-eleven">
                        <div class="section-title mb-30">
                            <h3 class="text-center">IAK Actuarial Service </h3>
                        </div>
                        <p>Our local Actuarial Services practice, integrated with our global expertise, has the breadth of
                            expertise and experience to advise you on actuarial best practice, identifying risks and
                            addressing complex actuarial related matters. We provide insights and solutions for all
                            businesses that face significant and complex risks. Our advice and support can help you manage
                            risk and capital more effectively and provide a more informed, efficient and sustainable basis
                            for value creation. </p>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row justify-content-center">
                @foreach ($actuarials as $actuarial)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                        <div class="">
                            <div class="border p-5">
                                <h4 class="title"> {{ $actuarial->name }} </h4> <br>
                                <p> {{ $actuarial->long_description }} </p>
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
    <!-- IAK Actuarial Service area-end -->
@endsection
