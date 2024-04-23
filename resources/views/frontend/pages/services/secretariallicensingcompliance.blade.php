@extends('frontend.layouts.master')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Secretarial, licensing & compliance
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Secretarial, licensing & compliance</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="Secretarial, licensing & compliance">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="Secretarial, licensing & compliance">
    </div>
</section>
<!-- breadcrumb-area-end -->
  <!-- Secretarial, licensing & compliance-area -->
 <section class="about-area-eleven">
<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
        <div class="about-img-wrap-eleven">
            <img src="{{ asset('frontend/assets/images/services/secretarial-compliance-report.jpg')}}" alt="Business Services">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="Business Services" class="shape-one">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="Business Services" class="shape-two">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content-eleven">
            <div class="section-title mb-30">
                <span class="sub-title">Secretarial, licensing & compliance
                </span>
            </div>
            <p>we provide local directorship services for trade license purposes to global clients who do not have local directors. secretary. Company secretary services </p>
            <div class="about-list-two">
                <ul class="list-wrap">
                    @foreach ($secrets as $secret)
                    
                    <li><i class="fas fa-arrow-right"></i> {{ $secret->name }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
 </section>
 <!-- Secretarial, licensing & compliance-area-end -->
@endsection
