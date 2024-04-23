@extends('frontend.layouts.master')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Training & Development
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Training & Development</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="Training & Development">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="Training & Development">
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- training - development -area -->
<section class="about-area-eleven">
<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
        <div class="about-img-wrap-eleven">
            <img src="{{ asset('frontend/assets/images/services/training-programs.jpg')}}" alt="Training & Development">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="Training & Development" class="shape-one">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="Training & Development" class="shape-two">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content-eleven">
            <div class="section-title mb-30">
                <span class="sub-title">Tax and Development Programme
                </span>
            </div>
            <h6>The Tax and Development Programme delivers support initiatives for developing countries</h6>
            <p>Tax training and development typically refer to programs, courses, or initiatives aimed at educating individuals on various aspects of taxation, including laws, regulations, compliance, and planning strategies</p>

        </div>
    </div>
</div>

</div>
</section>
<!--training- development-area-end -->
@endsection
