@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Membership</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Membership</li>
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
    <!-- membership-area -->
    <section class="services-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                        <h2 class="">We have already served a good number of members from a wide range
                            of sectors. Some of sectors are listed below</h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                @foreach ($members as $member)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">

                        <div class="services-item-three">
                            <div class="services-thumb-three membership">
                                <a href="#"><img src="{{ asset('/backendsite/memimg/' . $member->image) }}"
                                        class="" width="300" height="300" alt="Membership Image"></a>
                            </div>
                            <div class="services-content-three">
                                <a target="_blank" class="title" href="{{ $member->link }}"><img
                                        src="{{ asset('/backendsite/memimg/' . $member->logo) }}" width="40"
                                        height="40" alt="Memership"> {{ $member->title }} </a>
                                <p>{{ $member->long_description }}</p>
                                <div class="overlay-icon">
                                    <i class="flaticon-healthcare"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
        <div class="services-shape-four">
            <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png') }}" alt="" data-aos="fade-left"
                data-aos-delay="200">
        </div>
    </section>
    <!-- membership-area-end -->
@endsection
