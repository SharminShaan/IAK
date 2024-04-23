@extends('frontend.layouts.master')
@section('title', 'E-buletin Details')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">E-buletin Newsletter
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">E-buletin Newsletter</li>
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
    <!-- blog-details-area -->
    <section class="blog-details-area">
        <div class="container">
            <div class="blog-details-wrap">
                <div class="row justify-content-center">
                    <section class="services-area-three">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                                        <h2 class="title tg-element-title"> {{ $newsletter->title }} </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="services-item-three">

                                        <div class="services-content-three">
                                            <h4 class="title"> {{ $newsletter->subtitle }} </h4>
                                            <p> {{ $newsletter->short_description }} </p>
                                            <hr>
                                            <p> {{ $newsletter->long_description }} </p>
                                            <div class="overlay-icon">
                                                <i class="flaticon-protection"></i>
                                            </div>

                                            <img src="{{ asset('/backendsite/newimg/' . $newsletter->image) }}"
                                                class="img-fluid text-center" alt="ICAB"></a>
                                            <hr>
                                            @isset($newsletter->file_upload)
                                                <p class="text-center"> <a target="__blank" href="{{ asset('/backendsite/newimg/pdf/'.$newsletter->file_upload) }}"> <b> PDF Download: </b>  {{$newsletter->file_upload}}</a> </p>
                                            @endisset
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="services-shape-four">
                            <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png') }}" alt=""
                                data-aos="fade-left" data-aos-delay="200">
                        </div>
                    </section>
                </div>
            </div>
    </section>
    <!-- blog-details-area-end -->
@endsection
