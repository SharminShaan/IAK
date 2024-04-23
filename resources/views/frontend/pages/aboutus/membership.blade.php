@extends('frontend.layouts.master')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title" data-aos="fade-down" data-aos-delay="0">Membership</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                            <li class="breadcrumb-item"><a href="#" >Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Membership</li>
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
 <!-- membership-area -->
 <section class="services-area-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                    <span class="sub-title tg-element-title">Gain a Success With Us!</span>
                    <h2 class="title tg-element-title">We have already served a good number of members from a wide range of sectors. Some of sectors are listed below</h2>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                @foreach ($members as $member)
                <div class="services-item-three">
                    <div class="services-thumb-three membership">
                        <a href="#"><img src="{{ asset('/backendsite/memimg/' . $member->image)}}" class="img-fluid" alt="Japan Bangladesh"></a>
                    </div>
                    <div class="services-content-three">
                        <a target="_blank" class="title" href="{{ $member->link }}" ><img src="{{ asset('/backendsite/memimg/' . $member->logo) }}" width="40"
                            height="40" alt="Memership"> {{ $member->title }} </a>
                        <p>{{$member->long_description}}</p>
                        <div class="overlay-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three">
                        <a href="#"><img src="{{ asset('frontend/assets/images/ICAB.jpg')}}" alt="ICAB"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title"><a href="#">ICAB - The Institute of Chartered Accountants of Bangladesh</a></h4>
                        <p>ICAB is the regulatory body for the profession of accountants and connected matters therewith. The education, training and qualification imparted by the ICAB is recognized internationally. As leaders in accountancy, ICAB members have the knowledge, skills, expertise and commitment to maintain the highest professional standards</p>
                        <div class="overlay-icon">
                            <i class="flaticon-protection"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three membership">
                        <a href="#"><img src="{{ asset('frontend/assets/images/bcci.jpg')}}" class="img-fluid" alt="BCCCI"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title">Bangladesh China Chamber of Commerce and Industry (BCCCI)</h4>
                        <p>The China-Bangladesh Chamber of Commerce and Industry (CBCCI) is an organization established to promote and facilitate trade, investment, and economic cooperation between China and Bangladesh.</p>
                        <div class="overlay-icon">
                            <i class="flaticon-healthcare"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three">
                        <a href="#"><img src="{{ asset('frontend/assets/images/KBCCCI.jpg')}}" alt="KBCCI"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title"><a href="#">Korea-Bangladesh Chamber of Commerce & Industry</a></h4>
                        <p>The Korean-Bangladesh Chamber of Commerce and Industry (KBCCI) is an organization that facilitates trade and business relations between South Korea and Bangladesh.</p>
                        <div class="overlay-icon">
                            <i class="flaticon-protection"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <div class="services-item-three">
                    <div class="services-thumb-three">
                        <a href="#"><img src="{{ asset('frontend/assets/images/ibcci.jpeg')}}" alt="IBCCI"></a>
                    </div>
                    <div class="services-content-three">
                        <h4 class="title"><a href="#">India-Bangladesh Chamber of Commerce & Industry (IBCCI)</a></h4>
                        <p>The Indian-Bangladesh Chamber of Commerce and Industry (IBCCI) is an organization aimed at fostering trade and economic relations between India and Bangladesh. It serves as a platform for businesses from both countries to collaborate, network, and explore opportunities for mutual growth.</p>
                        <div class="overlay-icon">
                            <i class="flaticon-protection"></i>
                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
    <div class="services-shape-four">
        <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png')}}" alt="" data-aos="fade-left" data-aos-delay="200">
    </div>
</section>
<!-- membership-area-end -->
@endsection
