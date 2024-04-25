@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Listed Companies
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listed Companies</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="IAK Listed Companies ">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="IAK Listed Companies ">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!--llisted companies-area -->
    <section class="about-area-six ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10  mt-5">
                    <div class="section-title section-title-three text-center mb-60 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Listed Companies</span>
                        <h2 class="title tg-element-title">Government/ Semi-Government/Autonomous Bodies and Listed
                            Companies
                        </h2>
                        <p>This is a list of notable government-owned companies of Bangladesh. This is a dynamic list and
                            may never be able to satisfy particular standards for completeness.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 mb-5">
                    <div class="about-content-six">
                        <div class="about-list">
                            <ul class="list-wrap">
                                @foreach ($govs as $gov)
                                    <li><i class="fas fa-arrow-right"></i> {{ $gov->name }} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- listed companies-area-end -->
@endsection
