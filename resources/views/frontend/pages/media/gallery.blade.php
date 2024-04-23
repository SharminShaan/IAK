@extends('frontend.layouts.master')
@section('title', 'Gallery')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Gallery
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png') }}" alt="News Letter">
            <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png') }}" alt="News Letter">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    {{-- Gallery --}}

    <section class="services-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title-two mb-50 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Our Gallery</span>
                        <h2 class="title tg-element-title">Islam Aftab Kamrul & Co., Chartered Accountants Gallery</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($galleries as $gallery)

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <div class="services-item-three">
                        <div class="services-content-three">
                            <h4 class="title"> {{ $gallery->title }} </h4>
                            <p> {{ $gallery->short_description }} </p>
                            <div class="overlay-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                        </div>
                        <div class="services-thumb-three membership">
                            <ul class="side-instagram list-wrap">
                                @isset($gallery->image)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image) }}"
                                        alt="IAK gallery"></a></li>
                                @endisset

                                @isset($gallery->image2)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image2) }}"
                                            alt="IAK gallery"></a></li>
                                @endisset

                                @isset($gallery->image3)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image3) }}"
                                            alt="IAK gallery"></a></li>
                                @endisset

                                @isset($gallery->image4)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image4) }}"
                                            alt="IAK gallery"></a></li>
                                @endisset

                                @isset($gallery->image5)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image5) }}"
                                            alt="IAK gallery"></a></li>
                                @endisset

                                @isset($gallery->image6)
                                <li><a href="#"><img src="{{ asset('/backendsite/gallery/' .$gallery->image6) }}"
                                            alt="IAK gallery"></a></li>
                                @endisset
                            </ul>
                        </div>

                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <div class="services-item-three">
                        <div class="services-content-three">
                            <h4 class="title"> Cricket Tournament-2023</h4>
                            <p> The cricket team of Islam Aftab Kamrul & Co., Chartered Accountants showed a great
                                performance in winning our first cricket match of BCACP Cricket Tournament-2023. Hope for
                                the best for the next match!! </p>
                            <div class="overlay-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                        </div>
                        <div class="services-thumb-three membership">
                            <ul class="side-instagram list-wrap">
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket.jpg') }}"
                                            alt="IAK gallery"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket1.jpg') }}"
                                            alt="IAK gallery"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket2.jpg') }}"
                                            alt="IAK gallery"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket3.jpg') }}"
                                            alt="IAK gallery"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket4.jpg') }}"
                                            alt="IAK gallery"></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/assets/images/newsletter-events/cricket5.jpg') }}"
                                            alt="IAK gallery"></a></li>
                            </ul>
                        </div>

                    </div>
                </div> --}}

            </div>
        </div>
        <div class="services-shape-four">
            <img src="{{ asset('frontend/assets/img/services/h4_services_shape.png" alt="" data-aos="fade-left" data-aos-delay="200">
        </div>
    </section>
@endsection
