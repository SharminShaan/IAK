@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Foreign Clients
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Foreign Clients</li>
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
    <!-- Foreign client-area -->
    <section class="pricing-area-three">
        <div class="pricing-shape">
            <img src="{{ asset('frontend/assets/img/images/pricing_shape.png') }}" alt="" data-aos="fade-left"
                data-aos-delay="200">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <div class="section-title section-title-three text-center mb-60 tg-heading-subheading animation-style1">
                        <span class="sub-title">Foreign Clients</span>
                    </div>
                </div>
            </div>

            <div class="row text-center ">
                @foreach ($foreigns as $foreign)
                    <div class="col-lg-10 col-md-10 col-sm-10 text-center  offset-lg-2 offset-md-2 offset-sm-2">
                        <div class="mx-auto">
                            <img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}" alt="Foreign Clients">
                            @isset($foreign->logo)
                                <img src="{{ asset('/backendsite/clientimg/' . $foreign->logo) }}" width="30" height="30"
                                    alt="foreign_logo">
                            @endisset
                            <span>{{ $foreign->name }}</span>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        </div>
    </section>
    <!-- Foreign client  area-area-end -->
@endsection
