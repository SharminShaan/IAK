@extends('frontend.layouts.master')
@section('content')
  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Human Resources and Other services
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="index.html" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Human Resources</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="IAK Human Resource ">
        <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="IAK Human Resource">
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- audit-area -->
<section class="about-area-eleven">
<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
        <div class="about-img-wrap-eleven">
            <img src="{{ asset('frontend/assets/images/services/Services-of-Human-Resource-in-Bangladesh.png')}}" alt="Human Resources">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape01.png')}}" alt="IAK Human Resource" class="shape-one">
            <img src="{{ asset('frontend/assets/img/images/inner_about_shape02.png')}}" alt="IAK Human Resource" class="shape-two">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content-eleven">
            <div class="section-title mb-30">
                <span class="sub-title">Human Resources And Other Services
                </span>
            </div>
            <p>Human Resources (HR) and other services are subject to various taxes depending on the jurisdiction and the specific services provided </p>
            <div class="about-list-two">
                <ul class="list-wrap">
                    @foreach ($humans as $human)


                    <li><i class="fas fa-arrow-right"></i>{{ $human->name }} </li>
                    {{-- <li><i class="fas fa-arrow-right"></i>Organizational design and strategy </li>
                    <li><i class="fas fa-arrow-right"></i>Job analysis and job profile  </li>
                    <li><i class="fas fa-arrow-right"></i>Recruitment, selection & retention  </li>
                    <li><i class="fas fa-arrow-right"></i>Performance review and development </li>
                    <li><i class="fas fa-arrow-right"></i>Executive search & recruitment</li> --}}
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
                    <li><i class="fas fa-arrow-right"></i>
                  Obtaining permission of Liaison Office from BIDA </li>
                    <li><i class="fas fa-arrow-right"></i>Obtaining work permit for expatriate employee from BIDA</li>
                    <li><i class="fas fa-arrow-right"></i>
                        Use of office address for business communication  </li>
                    <li><i class="fas fa-arrow-right"></i>
                        Quarterly report submission to Bangladesh Bank & others statutory authority with internal audit</li>
                    <li><i class="fas fa-arrow-right"></i>Renewal of Liaison office & permission from Bangladesh Bank </li>
                    <li><i class="fas fa-arrow-right"></i>Obtaining renewal of work permit for expatriate employee from BIDA</li>
                    <li><i class="fas fa-arrow-right"></i>Opening of Bank Account for Liaison office</li>
                    <li><i class="fas fa-arrow-right"></i> Opening of Bank Account for the expatriate personnel</li>
                    <li><i class="fas fa-arrow-right"></i>Obtaining security clearance from Special Branch, National Security Intelligence and Ministry of Home Affairs, Govt. of Bangladesh for expatriates</li>
                    <li><i class="fas fa-arrow-right"></i>Obtaining ‘PI’/‘E’-visa recommendation letter from BIDA
                    </li>
                    <li><i class="fas fa-arrow-right"></i>Obtaining ‘E’, ‘PI’, ‘FE’ - visa of the expatriate from the immigration</li>
                    <li><i class="fas fa-arrow-right"></i>Cancellation of permission of Liaison Office from BIDA and Bangladesh Bank</li>
                    <li><i class="fas fa-arrow-right"></i> Other professional services on request</li>

                        </ul>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- human resource area-end -->
@endsection
