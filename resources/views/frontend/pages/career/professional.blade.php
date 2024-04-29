@extends('frontend.layouts.master')
@section('title', 'Profesional')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Profesional
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profesional</li>
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

    <section class="about-area-two">
        <div class="container">
            <div class="row align-items-center justify-content-center">


                <div class="row">
                    @foreach ($profs as $prof)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                            <div class="services-item-three">
                                <div class="regi border p-3 ">
                                    <ul>
                                        <li class="title"><b>Job Title :</b> {{ $prof->job_title }} </li>
                                        <li> <b>Vacancy :</b> {{ $prof->vacancy }} </li>
                                        <li> <b>Job Responsibilities :</b> {{ $prof->responsibilities }} </li>
                                        <li> <b>Education :</b> {{ $prof->education }} </li>
                                        <li> <b>Experience :</b> {{ $prof->experience }} </li>
                                        <li> <b>Job Type :</b> {{ $prof->employment_status }} </li>
                                        <li> <b>Job Location :</b> {{ $prof->location }} </li>
                                        <li> <b>Age :</b> {{ $prof->age }} </li>
                                        <li> <b>Compensation :</b> {{ $prof->compensation }} </li>
                                        <li><i class="far fa-calendar"></i> <b>Application Deadline:</b> {{ $prof->date }} </li>
                                    </ul>


                                    {{-- Registration --}}
                                    <div class="text-center">
                                        <a href="{{ route('pro.reg.create', $prof->id) }}"
                                            class="btn btn-info btn-sm edit">Apply </a>
                                    </div>

                                    <div class="overlay-icon">
                                        <i class="flaticon-healthcare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>
@endsection
