@extends('frontend.layouts.master')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title" data-aos="fade-down" data-aos-delay="0"> Audit and Assurance</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                                        <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Audit and Assurance</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->
     <!-- audit-area -->
     <section class="about-area-eleven">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="about-img-wrap-eleven">
                        <img src="{{ asset('frontend/assets/images/services/audit.jpg')}}" alt="Audit">
                        <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="" class="shape-one">
                        <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="" class="shape-two">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-eleven">
                        <div class="section-title mb-30">
                            <span class="sub-title">Audit & Assurance</span>
                            <h2 class="title animation-style2"> Major areas of expertize of the firm  </h2>
                        </div>
                        <p>We go beyond the traditional auditor and client relationship by becoming your Trusted Business Advisor.</p>
                        <div class="about-list-two">
                            <ul class="list-wrap">
                                @foreach ($audits as $audit)


                                <li><i class="fas fa-arrow-right"></i> {{ $audit->name }} </li>
                                {{-- <li><i class="fas fa-arrow-right"></i>Internal Audit   </li>
                                <li><i class="fas fa-arrow-right"></i>Management Audit   </li>
                                <li><i class="fas fa-arrow-right"></i>Performance Audit  </li>
                                <li><i class="fas fa-arrow-right"></i>IT Audit   </li>
                                <li><i class="fas fa-arrow-right"></i>Due Diligence</li> --}}
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class="row align-items-center justify-content-center">
                <div class=" col-xl-10 col-lg-10 mt-5 ">
                    <div class="about-content-eleven mt-5">
                        <div class="section-title mb-30 text-center">
                            <span class="sub-title">Professional Service Chart For Any Business</span>
                        </div>
                        <div class="about-list-two">
                            <ul class="list-wrap">
                                <li><i class="fas fa-arrow-right"></i>Code: C-1 >> Preparation of monthly financial statement in accordance with International Accounting Standard (IAS) and conducting monthly internal audit of the financial statements (under separate & independent audit team) </li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-2 >> Preparation of quarterly financial statement conducting quarterly audit and submission to different statutory bodies as required (Not required if C-1 is avail) </li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-3 >> Preparation of Annual Financial Statement in accordance with IAS & IFRS and conducting Audit of the financial statements.   </li>
                                <li><i class="fas fa-arrow-right"></i>
                                    Code: C-4 >> Professional book-keeper/Accountant for full time service within Dhaka City –per book-keeper  </li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-5 >> Payroll management : Preparation and submission of Salary Statements as per section 108 of ITO1984 including deduction of tax & deposit to Govt. Treasury, Bank transfer, PF deduction etc. up to 50 employees (additional employee US$ 2 per employee)  </li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-6 >> Special purpose Audit and investigation</li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-7 >> Review and reporting on internal control system, Computerization of Accounting Systems</li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-8 >> Developing Inventory Management system including EOQ, ABC Inventory Audit plan, Fixed Assets Management etc.</li>
                                <li><i class="fas fa-arrow-right"></i>Code: C-9 >> Other professional services on request</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- audit & assurance-area-end -->


@endsection
