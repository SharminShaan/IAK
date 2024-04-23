@extends('frontend.layouts.master')
@section('title', 'E-buletin')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">NewsLetter
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News Letter</li>
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


    <section class="blog-area">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            <div class="row">

                                @foreach ($buletin as $bulet)
                                    <div class="col-md-6">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <img src="{{ asset('/backendsite/newimg/' . $bulet->image) }}"
                                                class="rounded text-center" alt="ICAB"></a>
                                            </div>
                                            <div class="blog-post-content-two text-left">
                                                <h5 class="text-left"><a href="{{ route('newsletter.details', $bulet->id) }}"> {{ $bulet->title}}</a></h5>
                                                <p>{{ $bulet->subtitle}}</p>
                                                <a class="btn btn-sucess"
                                                href="{{ route('newsletter.details', $bulet->id) }}">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>




                        </div>
                    </div>
                </div>
    </section>


@endsection
