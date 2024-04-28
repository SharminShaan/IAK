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
                    <h2 class="text-center">FAQs</h2>
                </div>
            </div>


            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">

                    <div class="accordion" id="accordionExample">

                        @foreach ($faqs as $key =>$faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo{{$faq->id}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo{{$faq->id}}" aria-expanded="false" aria-controls="collapseTwo{{$faq->id}}">
                                        {{ $key + 1  }}. {{ $faq->short_description }}
                                    </button>
                                </h2>
                                <div id="collapseTwo{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo{{$faq->id}}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $faq->long_description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


            </div>

        </div>
        <div class="services-shape-four">
            <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png') }}" alt="" data-aos="fade-left"
                data-aos-delay="200">
        </div>

    </section>
    <!-- standards-area-end -->
@endsection
