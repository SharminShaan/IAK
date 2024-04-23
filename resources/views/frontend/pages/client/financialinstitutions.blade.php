@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Financial Institutions
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Financial Institutions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="IAK Financial Institutions">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="IAK Financial Institutions">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- banking finalcial-area -->
    <section class="about-area-six">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10  mt-5">

                    <div class="section-title section-title-three text-center mb-60 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Financial Institutions</span>
                        <h2 class="title tg-element-title">Name of Banks and Non-Banking Financial Institutions
                        </h2> <br>
                        <h6>Banking institutions include commercial banks, savings and loan associations, and credit unions.
                            Non-banking financial institutions include insurance companies, .</h6>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-10 mb-5">
                    <div class="about-content-six">
                        <div class="about-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-arrow-right"></i>BRAC Bank PLC.</li> <br>
                                <li><i class="fas fa-arrow-right"></i>Agrani Bank PLC.</li>
                                <li><i class="fas fa-arrow-right"></i>Islami Bank Foundation</li>
                                <li><i class="fas fa-arrow-right"></i>Agrani Bank PLC Employees Superannuation Fund Trust
                                </li>
                                <li><i class="fas fa-arrow-right"></i> Agrani Bank PLC Employees Gratuity Fund Trust</li>
                                <li><i class="fas fa-arrow-right"></i> Agrani Bank PLC Employees Provident Fund Trust
                                </li>
                                <li><i class="fas fa-arrow-right"></i>Janata Bank PLC
                                </li><br>
                                <li><i class="fas fa-arrow-right"></i>Sonali Bank PLC.
                                </li>
                                <li><i class="fas fa-arrow-right"></i>National Housing Finance and Investment Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>Agrani SME Financing Company Limited
                                </li>

                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="pricing-item-wrap">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-3"> </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-two ficlient">

                                <ul>
                                    @foreach ($financeins as $finance)
                                    <li><img src="{{ asset('/backendsite/clientimg/' . $finance->logo) }}" width="30"
                                        height="30" alt="finance_logo">
                                    {{ $finance->name }}</li>


                                {{-- <i class="fas fa-arrow-right"></i>Agrani Equity & Investment Limited
                                <li><i class="fas fa-arrow-right"></i>ICB Securities Trading Company Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>ICB Asset Management Company Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>Agrani Equity & Investment Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>ICB Employees Superannuation Fund </li>
                                <li><i class="fas fa-arrow-right"></i> ICB Employees Provident Fund
                                </li>
                                <li><i class="fas fa-arrow-right"></i>ICB Karmachari Kallayan Tahbil
                                </li><br>
                                <li><i class="fas fa-arrow-right"></i>Uttara Finance Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>Islamic Commercial Insurance Company Limited
                                </li>
                                <li><i class="fas fa-arrow-right"></i>Investment Corporation of Bangladesh (ICB) </li> --}}
                                <br>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banking finalcial-area-end -->
@endsection
