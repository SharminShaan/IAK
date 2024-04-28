@extends('frontend.layouts.master')
@section('title', 'Regulators')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Regulators
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Regulators</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="News Letter">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="News Letter">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- regulators-area -->
    <section class="services-area-nine fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div
                        class="section-title-two text-center text-md-start white-title mb-40 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Financial Regulators</span>
                        <h2 class="title tg-element-title">Regulators of the Financial System</h2>
                    </div>
                </div>
            </div>
            <div class="services-item-wrap">
                @foreach ($regulators as $regulator)

                <div class="services-item-six" data-aos="fade-up" data-aos-delay="400">
                    <div class="services-thumb-six">
                        <a href="{{ $regulator->link }}"><img src="{{ asset('/backendsite/regulateimg/' . $regulator->image)}}" alt="regulateimg"></a>
                    </div>
                    <div class="services-content-six">
                        <div class="services-content-six-top">
                            <img class="circle" src="{{ asset('/backendsite/regulateimg/' . $regulator->logo) }}"  width="80"  alt="finance_logo">
                            <h2 class="title" style="text-align: left !important;" ><a target="_blank" href=" {{ $regulator->link }} "> {{ $regulator->title }} </a></h2>
                        </div>
                        <p> {{ $regulator->long_description }} </p>
                    </div>
                </div> <hr>
                @endforeach


            </div>
        </div>
        <div class="services-shape-wrap">
            <img src="{{ asset('frontend/assets/img/services/h6_services_shape01.png')}}" alt="shape" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('frontend/assets/img/services/h6_services_shape02.png')}}" alt="shape" data-aos="fade-up-right"
                data-aos-delay="400">
        </div>
    </section>
    <!-- Regulators -area-end -->
@endsection
