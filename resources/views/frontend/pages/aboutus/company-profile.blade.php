@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Company Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="IAK About Us">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="IAK About Us">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- about-area -->
    <section class="about-area-seven  pb-80">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="about-img-seven-wrap">
                        <!-- 463 /499 Image Size -->
                        <img src="{{ asset('frontend/assets/images/overviewCompany.jpg') }}" alt="Company Overview">
                        <!-- 270 /200 image -->
                        <img src="{{ asset('frontend/assets/images/companymaintains.jpg') }}" alt="Company Overview"
                            data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png') }}" alt="Company Overview"
                            class="shape" data-aos="zoom-in" data-aos-delay="500">
                        <div class="experience-wrap" data-aos="fade-left" data-aos-delay="0">
                            <h2 class="title">30</h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-seven">
                        <div class="section-title mb-30">
                            <span class="sub-title" data-aos="fade-down" data-aos-delay="0">COMPANY OVERVIEW</span>
                            <h2 class="title" data-aos="fade-up" data-aos-delay="0"> {{ $profile->title }} </h2>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="0"> {{ $profile->short_description }} </p>
                        <div class="success-wrap-two">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="count"><span class="odometer" data-count="20"></span>+</h2>
                                        <p>Best Award</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-rating"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="count"><span class="odometer" data-count="205"></span>k</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p class="info-two" data-aos="fade-up" data-aos-delay="0"> {{ $profile->long_description }}</p>
                        <a href="{{ route('contact') }}" class="btn btn-three" data-aos="fade-left"
                            data-aos-delay="0">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="services-widget col align-self-center">
                <h4 class="sw-title">Company Brochure</h4>
                <div class="services-brochure-wrap">
                    <a href="{{ asset('/backendsite/fileupload/' . $profile->file_upload) }}" target="_blank" download
                        class="download-btn"><i class="far fa-file-pdf"></i>PDF Download</a>
                </div>
            </div>
        </div>
    </div>
    <div class="video-area">
        <div class="video-bg" data-background="{{ asset('/backendsite/images/' . $profile->image) }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-btn-two">
                        <a href="{{ $profile->youtube }}" class="play-btn popup-video">
                            <img src="{{ asset('frontend/assets/img/icons/play.svg') }}" alt="IAK Company Brochure">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-area -->
    <section class="features-area-five features-bg"
        data-background="{{ asset('frontend/assets/img/bg/features_bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Core Features</span>
                        <h2 class="title">Amazing Features For Business Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-content">
                            <div class="content-top">
                                <div class="icon">
                                    <i class="flaticon-puzzle-piece"></i>
                                </div>
                                <h2 class="title">Taxation & VAT Service</h2>
                            </div>
                            <p>Professional Service Chart For Any Business. VAT tax is applicable only on goods sold within
                                a particular state, which means that the buyer and the seller need to be in the same state.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-content">
                            <div class="content-top">
                                <div class="icon">
                                    <i class="flaticon-inspiration"></i>
                                </div>
                                <h2 class="title">Statutory & Special Audit</h2>
                            </div>
                            <p>Statutory and special audits are two types of financial audits conducted by external auditors
                                to examine .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="features-item">
                        <div class="features-content">
                            <div class="content-top">
                                <div class="icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <h2 class="title">Business & Corporate Advisory</h2>
                            </div>
                            <p>Business and corporate advisory services encompass a range of professional assistance
                                provided to businesses to help them navigate various challenges and make informed decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/features_shape01.png') }}"
                alt="Business &  Corporate  Advisory">
            <img src="{{ asset('frontend/assets/img/images/features_shape02.png') }}"
                alt="Business &  Corporate  Advisory">
        </div>
    </section>
    <!-- features-area-end -->
    <!-- Our MISSION-area -->
    <section class="about-area-nine  pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                    <div class="about-img-wrap-four">
                        <div class="mask-img-wrap">
                            <img src="{{ asset('frontend/assets/images/mission.jpeg') }}" alt="OUR MISSION ">
                        </div>
                        <div class="icon"><i class="flaticon-business-presentation"></i></div>
                        <!-- <img src="{{ asset('frontend/assets/img/images/h3_about_img02.jpg') }}" alt="OUR MISSION Image" class="img-two"> -->
                        <div class="about-shape-wrap-three">
                            <img src="{{ asset('frontend/assets/img/images/h3_about_shape01.png') }}"
                                alt="Our Mission Image">
                            <img src="{{ asset('frontend/assets/img/images/h3_about_shape02.png') }}"
                                alt="Our Mission Image">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-four">
                        <div class="section-title-two mb-30">
                            <span class="sub-title">OUR MISSION </span>
                            <h2 class="title">We are the next gen Business experience</h2>
                        </div>
                        <ul>
                            <li>We adhere to the strictest principles of client confidentiality
                                and one stop, cost effective and quality services to client.</li>
                            <li>We adhere to the strictest principles of client confidentiality
                                and one stop, cost effective and quality services to client.</li>
                            <li>The sensitive and competitive nature of proprietary informtion
                                and maintain trust with demand.</li>
                            <li> Hire, develop and retain skilled and creative workforce and
                                quality professionals to meet clients’ requirements at optimum level of satisfaction.</li>

                            <li>Continuous Research, Development and need based training
                                for developing Human Resources.</li>
                        </ul>
                        <div class="about-list-three">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Quality Service</h2>
                                        <p>IAK is regarded as one of the top firms of chartered accountants in the country.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission-end -->

    <!-- Our Vission-area -->
    <section class="about-area-six about-area-twelve">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-img-six about-img-twelve">
                        <img src="{{ asset('frontend/assets/images/vission.jpg') }}" class="img-fluid"alt="Our Vission">
                        <img src="{{ asset('frontend/assets/img/images/inner_about_shape03.png') }}" class="img-fluid"
                            alt="Our Vission">
                        <img src="{{ asset('frontend/assets/img/images/h5_about_shape02.png') }}" alt="Our Vission">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-six">
                        <div class="section-title section-title-three mb-30">
                            <span class="sub-title">Our Vission</span>
                        </div>
                        <p>We go beyond the traditional auditing and ensure continuous
                            service excellence and maintain high quality services to the
                            clients by becoming your Trusted Business Advisor and go
                            beyond expectation of our valued clients.

                        </p>
                        <img src="{{ asset('frontend/assets/images/vission.png') }}" class="img-fluid"
                            alt="our vission">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Vission-end -->
@endsection
