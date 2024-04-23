@extends('frontend.layouts.master')
@section('content')
       <!-- breadcrumb-area -->
       <section class="breadcrumb-area breadcrumb-bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0"> Taxation & VAT Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Taxation & VAT Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="Taxation & VAT Services">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="Taxation & VAT Services">
        </div>
  </section>
<!-- breadcrumb-area-end -->
<!-- audit-area -->
<section class="about-area-eleven">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-md-9 order-0 order-lg-2">
            <div class="about-img-wrap-eleven">
                <img src="{{ asset('frontend/assets/images/services/Taxes.webp')}}" alt="Taxation">
                <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="" class="shape-one">
                <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="" class="shape-two">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-content-eleven">
                <div class="section-title mb-30">
                    <span class="sub-title">Taxation & VAT Services</span>
                </div>
                <p>Preparation and submission of Company’s income tax return, attending hearing at DCT’s level from time to time </p>
                <div class="about-list-two">
                    <ul class="list-wrap">
                        @foreach ($taxes as $tax)

                        <li><i class="fas fa-arrow-right"></i> {{ $tax->name }} </li>
                        {{-- <li><i class="fas fa-arrow-right"></i>Preparation, filing, pleading Appeals and Tribunals  </li>
                        <li><i class="fas fa-arrow-right"></i>Preparation, filing and assisting in obtaining exemption/reduced
                            rate certifications.  </li>
                        <li><i class="fas fa-arrow-right"></i>Preparation, filing and assisting in obtaining approval of provident,
                            gratuity and pension funds.  </li>
                        <li><i class="fas fa-arrow-right"></i>Inward investments for foreign investors .   </li>
                        <li><i class="fas fa-arrow-right"></i>Monthly VAT returns & documentation.</li> --}}
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
                        <li><i class="fas fa-arrow-right"></i>Code: D-1 >> Preparation and submission of Company’s income tax return, attending hearing at DCT’s level from time to time and finalization of Income Tax assessment. </li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-2 >> Expatriate employee’s Salary tax management and finalization for each employee. </li>
                        <li><i class="fas fa-arrow-right"></i>
                            Code: D-3 >> Local employee’s salary tax management and finalization for each employee.  </li>
                        <li><i class="fas fa-arrow-right"></i>
                            Code: D-4 >> Advising on Individual & Company tax issues, Tax Planning including withholding taxes and any changes in tax rules regulation and applicable law and regulation in Bangladesh. </li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-5 >> VAT registration. </li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-6 >> Monthly VAT returns preparation, submission & maintenance of all documentation.</li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-7 >> Tax Due Diligence (TDD)/ Complete tax compliance review / Tax Planning.</li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-8 >> Deferred Tax Computation and application.</li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-9 >> Others Tax & VAT issues including Appeal, Tribunal etc.</li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-10 >> Tax Clearance of Liaison Office (regular).</li>
                        <li><i class="fas fa-arrow-right"></i>Code: D-11 >> Obtaining TIN for the Company & individual.</li>
                        <li><i class="fas fa-arrow-right"></i>
                            Code: D-12 >> Other professional services on request.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- audit & assurance-area-end -->


@endsection
