@extends('frontend.layouts.master')
@section('content')
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Business Services
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Business Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="IAK Business Services">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="IAK Business Services">
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- business services-area -->
<section class="about-area-eleven">
<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
        <div class="about-img-wrap-eleven">
            <img src="{{ asset('frontend/assets/images/services/business-services.webp')}}" alt="Business Services">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="Business Services" class="shape-one">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="Business Services" class="shape-two">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content-eleven">
            <div class="section-title mb-30">
                <span class="sub-title">Business Services
                </span>
            </div>
            <p>Business services tax typically refers to a tax levied on certain services provided by businesses. However, it's important to note that the specifics of such a tax can vary significantly depending on the jurisdiction </p>
            <div class="about-list-two">
                <ul class="list-wrap">
                    @foreach ($businesses as $business)


                    <li><i class="fas fa-arrow-right"></i> {{ $business->name }} </li>
                    {{-- <li><i class="fas fa-arrow-right"></i>Services Covered: The services subject to taxation can vary widely. </li>
                    <li><i class="fas fa-arrow-right"></i>Legislation and Regulations: Each country or region may have its own legislation regarding business services tax  </li>
                    <li><i class="fas fa-arrow-right"></i>Compliance and Reporting: Businesses typically need to register for the tax, collect it from customers, and remit it to the relevant tax authority.   </li> --}}
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
</section>
<!-- business services-area-end -->
@endsection
