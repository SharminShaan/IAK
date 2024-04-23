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
                        <h2 class="title"> Our major audit and advisory clients</h2>
                        <p>The term "audit client" means the entity whose financial statements or other information is being
                            audited, reviewed, or attested and any affiliates of the audit client.</p>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="pricing-box-three">

                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    @foreach ($foreigns as $foreign)
                                        <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">
                                            @isset($foreign->logo)
                                                <img src="{{ asset('/backendsite/clientimg/' . $foreign->logo) }}"
                                                    width="30" height="30" alt="foreign_logo">
                                            @endisset


                                            {{ $foreign->name }}
                                        </li>


                                        {{-- <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> YKK Bangladesh Pte Ltd</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">Japan External Trade Organization (JETRO)</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> UNIQLO Co. Ltd.</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">UNIQLO Social Business Bangladesh Ltd. </li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">Toray Internationa</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">Kintetsu World Express (Bangladesh) Ltd.</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> QTEC Dhaka Laboratory Co. Ltd</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> QTEC Dhaka Laboratory Co. Ltd</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> AIC, Inc </li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> Ajinomoto Co. Ltd.  </li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">  Anowara Shimokawa Co. Ltd. </li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> Chori & Co </li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> Grameen UNIQLO Ltd</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients">  Hamakyorex Co. Ltd</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> I. P. Jaq Knitting Limited</li>
                                            <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg')}}" alt="Foreign Clients"> Japan Bangladesh Chamber of Commerce & Industry</li> --}}
                                        <br>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="pricing-box-three">

                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Foreign Commerce & Industry Association In Dhaka</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Foreign Universities Alumni Association (JUAAB)</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> K-2 Logistics Bangladesh Ltd.</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> N.I. Teijin Shoji Ltd/Teijin Frontier Co. Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Nagase Singapore (Pte) Ltd </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients">Colgis BD Ltd..</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Porter & Co. Bangladesh Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Shima Seiki Mfg., Ltd </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> YAGI Bangladesh Garments Limited </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Grameen Yukiguni Maitake Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients">euglena Co. Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> X-Plus Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Foreign Association in Dhaka </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Foreign School, Dhaka</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Maruhisa Pacific Co. Ltd.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="pricing-box-three">
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Nippon Koei Ltd.</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Nippon Koei Bangladesh Ltd</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Nippon Koei India Pvt Ltd</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Asahi Glass Co. Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Tokyo Gas Engineering Solutions Corporation </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients">Mitsui & Co. (Asia Pacific) Pte. Ltd.</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Morimoto Singapore Pte Limited </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> JBEC Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Japan Fast Trade Ltd </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Podokkhep.jp Ltd </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Focus Garment Tech Pte Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Obayashi Corporation</li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> Fukuya.rr. Ltd. </li>
                                    <li><img src="{{ asset('frontend/assets/img/icons/check_icon03.svg') }}"
                                            alt="Foreign Clients"> JB Networks Co. Ltd.</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Foreign client  area-area-end -->
@endsection
