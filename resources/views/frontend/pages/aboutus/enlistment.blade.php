@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0"> Enlistment</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enlistment</li>
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
    <!-- enlistment-area -->
    <section class="about-area-two pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6 order-0 order-lg-2">
                    <div class="">
                        <div class="main-img">
                            <img src="{{ asset('frontend/assets/images/enlistment.png') }}" alt="enlistment">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ">
                    <div class="about-content-two">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Our ENLISTMENT</span>
                            <h2 class="title tg-element-title ">Accreditation & Enlistment with Authorities</h2>
                        </div>
                        <p>Enlistment typically refers to the process of joining or enrolling in a particular organization,
                            often with a formal commitment.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-xl-6 col-lg-6 col-md-6"><hr>
                    <h3 class="text-center">Enlistment List</h3><hr>
                    <div class="about-list">
                        <ul class="list-wrap">
                            @foreach ($enlistments as $enlist)
                                <li>
                                    {{-- <img src="{{ asset('frontend/assets/img/icons/check_icon.svg') }}" alt="ENLISTMENT"> --}}
                                    <a target="_blank" href="{{ $enlist->link }}">
                                        <img src="{{ asset('/backendsite/logo/' . $enlist->logo) }}" width="30"
                                            height="30" alt="ENLISTMENT">
                                        {{ $enlist->name }} </a>
                                </li> <br>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <hr>


            <!-- 3rd row -->
            <div class="row mt-30 mb-20">
                <h2 class="text-center mt-4 mb-4">Logistics of the Firm </h2>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Office spaces
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Office area – 8,600 sft. in Mirpur & 3,600 sft. in Gulsha.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        IT Environment
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>IP Surveillance, Access control and PA System</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Network Facility
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>LAN Network with Central Server & Intercom
                                            System</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Email
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> info@audit.com.bd.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Telephone
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>88(02) +88 02-9027738</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Mobile
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>+88 01790-700404</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <h3>IAK Establishment, Age & Registration of Firm </h3>
                        <div class="about-list">
                            <ul class="list-wrap">
                                <li><img src="{{ asset('frontend/assets/img/icons/check_icon.svg') }}"
                                        alt="ENLISTMENT">(a) Date
                                    of Establishment of the Firm : 01 October 1993 </li>
                                <li><img src="{{ asset('frontend/assets/img/icons/check_icon.svg') }}"
                                        alt="ENLISTMENT">(b) Age
                                    of the Firm : 30 years </li>
                                <li><img src="{{ asset('frontend/assets/img/icons/check_icon.svg') }}"
                                        alt="ENLISTMENT">(c)
                                    Registration of the Firm : 01 October 1993 </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="about-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/about_shape01.png') }}" alt="enlistment">
            <img src="{{ asset('frontend/assets/img/images/about_shape02.png') }}" alt="enlistment">
        </div>
    </section>
    <!-- enlistment-area-end -->
@endsection
