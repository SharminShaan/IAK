@extends('frontend.layouts.master')
@section('title', 'standards')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Standards</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">standards</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- standards-area -->
    <section class="services-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title-two mb-20 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                        <h2 class="title tg-element-title">Standards are principle-focused and provide a framework for performing and promoting internal auditing. </h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <hr>
                    <h3 class="text-center">Standards List</h3>
                    <hr>
                    <div class="about-list">
                        <ul class="">
                            @foreach ($standards as $standard)
                                <li>
                                    <a target="_blank" href="{{ $standard->link }}"><img
                                            src="{{ asset('/backendsite/standardimg/' . $standard->logo) }}" width="30"
                                            height="30" alt="Standards"> {{ $standard->title }} </a>
                                </li> <br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-6 col-md-6"><hr>
                <h3 class="text-center">Enlistment List</h3><hr>
                <div class="about-list">
                    <ul class="list-wrap">
                        @foreach ($enlistments as $enlist)
                            <li>
                                {{-- <img src="{{ asset('frontend/assets/img/icons/check_icon.svg') }}" alt="ENLISTMENT"> --}}
            {{-- <a target="_blank" href="{{ $enlist->link }}">
                                    <img src="{{ asset('/backendsite/logo/' . $enlist->logo) }}" width="30"
                                        height="30" alt="ENLISTMENT">
                                    {{ $enlist->name }} </a>
                            </li> <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> --}}

        </div>
        <div class="services-shape-four">
            <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png') }}" alt="" data-aos="fade-left"
                data-aos-delay="200">
        </div>
    </section>
    <!-- standards-area-end -->
@endsection
