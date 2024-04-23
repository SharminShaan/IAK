@extends('frontend.layouts.master')
@section('content')
    <!-- Carousel Start -->
    <section class="slide">
        <div class="container-fluid p-0 ">
            <div id="header-carousel" class="carousel " data-bs-ride="carousel ">
                <div class="carousel-inner">
                    @foreach ($slider as $key => $row)
                        <div class="carousel-item @if ($key + 1 == 1) active @endif ">

                            {{-- <img class="w-100 img-fluid carouselimg" src="{{ asset('frontend/assets/images/slider.jpg')}}" alt="SliderImage"> --}}
                            <img class="w-100 img-fluid carouselimg"
                                src="{{ asset('backendsite/images/slider/' . $row->slideimage) }}" alt="SliderImage">

                            {{-- <div class="carousel-caption slidercaption">
                                <div class="coontainer">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <div class="banner-content-two text-center">
                                                <span class="sub-title" data-aos="fade-down" >We Are Expert In This Field</span>
                                                <span class="sub-title" data-aos="fade-down">{{ $row->subheading }}</span>
                                                <h2 class="title " data-aos="fade-up" data-aos-delay="0">We want to become trusted leader in the market.</h2>
                                                <h2 class="title " data-aos="fade-up" data-aos-delay="0">{{ $row->heading }}
                                                </h2>
                                                <p data-aos="fade-up" class="sliderpara text-white" data-aos-delay="0"> We
                                                    assist the investors how to maintain the Good governance, keep
                                                    compliance and to ensure the local rules and regulations for doing the
                                                    successful business. </p>
                                                <div class="banner-btn sliderbtn justify-content-center">
                                                    <a href="about.html" class="btn text-center" data-aos="fade-right"
                                                        data-aos-delay="10">About Us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    @endforeach
                    {{-- <div class="carousel-item">
                        <img class="w-100 img-fluid" src="{{ asset('frontend/assets/images/slider1.jpg') }}" alt="SliderImage">
                            <div class="carousel-caption slidercaption">
                              <div class="coontainer">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="banner-content-two text-center">
                                            <span class="sub-title" data-aos="fade-down" >We Are Expert In This Field</span>
                                            <h2 class="title " data-aos="fade-up" data-aos-delay="0">We want to become trusted leader in the market.</h2>
                                            <p data-aos="fade-up" class="sliderpara text-white" data-aos-delay="0"> We assist the investors how to maintain the Good governance, keep compliance and to ensure the local rules and regulations for doing the successful business. </p>
                                            <div class="banner-btn sliderbtn justify-content-center ">
                                                <a href="about.html" class="btn text-center" data-aos="fade-right" data-aos-delay="10">About Us</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                         </div>
                </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon slideicon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon slideicon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </section>
    <!-- news sticker start -->
    <div class="news-container">
        <div class="title">
            Latest News
        </div>
        <ul>
            @foreach ($buletin as $bulet)

            @endforeach
            <li>
                <a href="{{ route('newsletter.details', $bulet->id) }}">{{$bulet->title}}</a>
            </li>


        </ul>
    </div>
    <!-- news sticker end -->
    <!-- about-area -->
    <section class="about-area-three">
        <div class="container">

            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about-img-wrap-three">
                        <!-- image must be 439 * 508 -->
                        <img src="{{ asset('/backendsite/images/homepage/' . $Whoweare->image1) }}" alt="CompanyExperience">
                        <!-- image must be 247*247 -->
                        {{-- <img src="{{ asset('/backendsite/images/homepage/' . $Whoweare->image2) }}" alt="CompanyExperience"> --}}
                        <div class="experience-wrap" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="title">{{ $Whoweare->years }} <span>Years</span></h2>
                            <p>{{ $Whoweare->yearsparagraph }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-three">
                        <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                            <span class="sub-title" data-aos="fade-down" data-aos-delay="100"> {{ $Whoweare->heading }}
                            </span>
                            <h2 class="title tg-element-title">{{ $Whoweare->subheading }}</h2>
                        </div>
                        <p class="info-one">{{ $Whoweare->paragraph }}.</p>
                        <div class="about-list-two">
                            <ul class="list-wrap ">
                                <li><i class="fas fa-arrow-right"></i>
                                    {{ $Whoweare->list1 }}</li>
                                <li><i class="fas fa-arrow-right"></i>
                                    {{ $Whoweare->list2 }} </li>
                                <li><i class="fas fa-arrow-right"></i>{{ $Whoweare->list3 }}</li>
                                <li><i class="fas fa-arrow-right"></i>{{ $Whoweare->list4 }}</li>
                            </ul>
                        </div>
                        <p class="" data-aos="fade-up" data-aos-delay="100">{{ $Whoweare->bottomparagraph }}.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-wrap-two">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape01.png') }}" alt="IAKCompanyInfo">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape02.png') }}" alt="IAKCompanyInfo">
            <img src="{{ asset('frontend/assets/img/images/h2_about_shape03.png') }}" alt="IAKCompanyInfo"
                data-aos="fade-left" data-aos-delay="500">
        </div>
    </section>
    <!-- about-area-end -->
    <!-- services-area -->
    <section class="services-area-two services-bg-two"
        data-background="{{ asset('frontend/assets/img/bg/services_bg02.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                        <span class="sub-title" data-aos="fade-down" data-aos-delay="100">Professional Services We
                            Offer</span>
                        <h4 class="text-left">IAK is one of the top firms of chartered accountants in the
                            country</h4>
                        {{-- @dd($serviceCat['sub_cat_name']) --}}

                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    {{-- <div class="view-all-btn text-end mb-30">
                        <a href="services.html" class="btn" data-aos="fade-zoomIn" data-aos-delay="100">See All
                            Service</a>
                    </div> --}}
                </div>
            </div>
            <div class="row ">

                @foreach ($serviceCat as $subcat)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8">
                        <div class="services-item-two text-left">
                            <div class="services-thumb-two">
                                <!-- image must be 247/340 -->
                                <img src="{{ asset('/backendsite/images/' . $subcat->image) }}" alt="IAKservices">
                            </div>
                            <div class="services-content-two">
                                {{-- <div class="icon">
                                <i class="flaticon-piggy-bank"></i>
                                </div> --}}
                                <h2 class="title text-left">{{ $subcat->sub_cat_name }}</h2>
                                <p class="text-left">{{ $subcat->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- virual office tour start -->
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="virtualtitle">
                        <h1>Virtual Tour</h1>
                        <p>ISLAM AFTAB KAMRUL & CO.
                            Chartered Accountants</p>
                    </div>
                    <div class="image360 border-5 bg-dark">
                        <iframe {{-- src="https://www.google.com/maps/embed?pb=!4v1711810204116!6m8!1m7!1sKNKK2kfl_ylrGpJn6ZQfrg!2m2!1d23.81570737101514!2d90.36574214053945!3f138.10231688115218!4f7.535186929483956!5f0.7820865974627469" --}} src="{{ $setting->vmap }}" width="100%" height="600"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR VALUED CLIENTS start -->
    <section class="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-8 text-center mt-5 mb-5">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style2 text-center">
                        <span class="sub-title tg-element-title"> Clients</span>
                        {{-- <h4 class="text-center"> Our Valued Clients </h4> --}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                    <div class="estimate-content text-center">

                        <div class="estimate-tab-wrap">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="estimate-form-wrap">
                                        <!-- brand-area -->
                                        <div class="brand-aera-five pt-t pb-5">
                                            <div class="container">
                                                <div class="row brand-active">

                                                    @foreach ($clients as $client)
                                                        <div class="col-lg-12">
                                                            <div class="brand-item">
                                                                <img src="{{ asset('/backendsite/clientimg/' . $client->logo) }}"
                                                                    class="rounded" alt="Banks, Financial Institutions">
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <!-- brand-area-end -->
                                        {{-- <a href="banking.html"><button class="btn btn-three text text-center"
                                                type="submit">See More</button>
                                        </a> --}}
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- partner-area -->
    <section class="services-area-eight fix section-py-120 mt-5">
        <div class="container custom-container-six">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center white-title mb-40 tg-heading-subheading animation-style3">
                        <span class="sub-title"> Our Team</span>
                        <h4 class="title tg-element-title">Expert Team will help you.</h4>
                    </div>
                </div>
            </div>
            <div class="row services-active-two">

                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                        <div class="team-item-five">
                            <div class="team-thumb-five">
                                <img src="{{ asset('/backendsite/teamimg/' . $team->image) }}" alt="A.K.M Aftabul Islam"
                                    class="img-fluid">
                            </div>
                            <div class="team-content-five">
                                <p class="text-white text-left">{{ $team->name }}</p>
                                <span class="text-white text-left">{{ $team->designation }} </span>
                                <div class="team-social-four text-left">
                                    <ul class="list-wrap">
                                        <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('frontend/assets/images/kamrul-islampic.jpg.png') }}"
                                alt="A.K.M Kamrul Islam" class="img-fluid">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title text-white"><a href="team-details.html">A.K.M Kamrul Islam
                                </a></h2>
                            <span class="text-white">Senior Partner </span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('frontend/assets/images/saleem.jpg') }}"
                                alt="Saleem Arungzeb Ahmed, FCA
                                        ">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title text-white"><a href="team-details.html">Saleem Arungzeb Ahmed
                                </a></h2>
                            <span class="text-white">Partner
                            </span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('frontend/assets/images/jibon.png') }}" alt="Jibon Chandra Das">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title text-white"><a href="team-details.html">Jibon Chandra Das</a></h2>
                            <span class="text-white">Director
                            </span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('frontend/assets/images/rezaul1.jpg') }}"
                                alt="Md Rezaul Haq ACA
                                        ">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title text-white"><a href="team-details.html">Md Rezaul Haq ACA
                                </a></h2>
                            <span class="text-white">Associate Director & GM </span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('frontend/assets/images/shubhra.png') }}" alt="Shubhra Paul ACA ">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title text-white"><a href="team-details.html">Shubhra Paul ACA </a></h2>
                            <span class="text-white">Associate Director & GM
                            </span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="services-shape-wrap">
            <img src="{{ asset('frontend/assets/img/services/h6_services_shape01.png') }}" alt="shape"
                data-aos="fade-down-left" data-aos-delay="400">
            <img src="{{ asset('frontend/assets/img/services/h6_services_shape02.png') }}" alt="shape"
                data-aos="fade-up-right" data-aos-delay="400">
        </div>
    </section>
    <!-- partner-area-end -->

    <section class="">

        <!-- ENLISTMENT -area -->
        <div class="brand-aera-two pb-80 mt-5 mb-5">
            <div class="container">
                <div class="mx-auto text-center mb-5 " style="max-width: 900px;">
                    <h3 class="section-title px-3 text-center">ENLISTMENT</h3>
                    {{-- <h1 class="mb-0">Our Enlistment Members</h1> --}}
                </div>

                <div class="row brand-active mt-5 ">

                    @foreach ($enlists as $enlistment)
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <a href="{{ $enlistment->link }}" target="_blank"> <img
                                        src="{{ asset('/backendsite/logo/' . $enlistment->logo) }}" alt="ENLISTMENT">
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 text-center mt-5">
                        <a href="enlistment.html"><button class="btn btn-three text " type="submit">See
                                More</button></a>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Member --}}
        <div class="brand-aera-two pb-80 mt-5 mb-5">
            <div class="container">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h3 class="section-title px-3 text-center">Regulators</h3>
                    {{-- <h1 class="mb-0">Our Enlistment Members</h1> --}}
                </div>
                <div class="row brand-active mt-5 ">

                    @foreach ($regulates as $regulator)
                        <div class="col-lg-12">
                            <div class="brand-item">
                                <a href="{{ $regulator->link }}" target="_blank"> <img
                                        src="{{ asset('/backendsite/regulateimg/' . $regulator->logo) }}"
                                        alt="ENLISTMENT"> </a>
                            </div>
                        </div>
                    @endforeach


                </div>
                {{-- <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 text-center mt-5">
                        <a href="enlistment.html"><button class="btn btn-three text " type="submit">See
                                More</button></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ENLISTMENT-area-end -->

    <!-- cta-area -->
    <section class="cta-area mt-5 mb-5">
        <div class="container">
            <div class="" data-background="{{ asset('frontend/assets/img/bg/cta_bg.jpg') }}">
                <div class="row align-items-center">

                    <div class="col-lg-6 offset-md-3">
                        <div class="footer-widget pt-4">
                            <h4 class="fw-title">Email Subscription</h4>
                            <div class="footer-newsletter text-center">

                                <div class="text-center">

                                    @if (Session::has('success'))
                                        <div class="alert alert-success" id="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                </div>

                                <form action="{{ route('subscribe') }}" method="post">
                                    @csrf
                                    <input type="email" placeholder="enter your e-mail" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3">
                        <div class="cta-btn text-end">
                            <a href="contact.html" class="btn">Contact Us</a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>


    <!-- blog-area -->

    <section class="blog-area-four ">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-60 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">News & Blogs</span>
                        <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                        {{-- <p>Learn something more from our blog</p> --}}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-4 ">
                        <div class="blog-post-item-four">
                            <div class="blog-post-thumb-four">
                                <!-- image must be 392/260  -->
                                <img src="{{ asset('/backendsite/blogimage/' . $blog->image) }}" alt="IAK Blog">
                            </div>
                            <div class="blog-post-content-four">
                                <a href="{{ route('blog.details', $blog->id) }}" class="tag">{{ $blog->tags }}</a>
                                <div class="blog-meta-two">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-calendar"></i>{{ $blog->date }}</li>
                                        <li><i class="far fa-user"></i>by <a
                                                href="{{ route('blog.details', $blog->id) }}">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                                <h5> <a href="{{ route('blog.details', $blog->id) }}"> {{ $blog->title }} </a></h5>
                                <p></p>
                                {{-- {{ route('blog.edit', $row->id) }} --}}
                                <a href="{{ route('blog.details', $blog->id) }}" class="link-btn">
                                    Read More <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>


    <!-- blog-area-end -->
@endsection

