@extends('frontend.layouts.master')
@section('title', 'Articaleship')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Articaleship
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Articaleship</li>
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

    <!-- Articleship-area -->
    <section class="about-area-two">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6 order-0 order-lg-2">
                    <div class="">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            {{-- <span class="sub-title tg-element-title">Apply for Article Student</span> --}}


                        </div>
                    </div>
                    <!-- job form start -->
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">
                        Apply Now
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Apply for Article Student
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="name" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="col-form-label">Phone Number:</label>
                                            <input type="number" class="form-control" id="phone" name="phone" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="cvfile" class="col-form-label">Attached CV:</label>
                                            <input type="file" id="cvfile" name="cvfile" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Send message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="col-xl-6 col-lg-6">
                    <div class="about-content-two">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Career Articleship</span>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Job Title </th>
                                    <th> Apply </th>
                                </tr>
                                <tr>
                                    <td>Article Student</td>
                                    <td><a href="{{ route('event.reg.create', 1) }}"
                                            class="btn btn-info btn-sm edit">Apply</a>
                                    </td>

                                </tr>

                            </table>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                            <div class="services-item-three">
                                <div class="regi border p-3">
                                    <ul>
                                        <li class="title"><b>Job Title : </b> {{ $article->job_title }} </li>
                                        <li> <b>Vacancy: </b> {{ $article->vacancy }} </li>
                                        <li><b> Job Responsibilities :</b> {{ $article->responsibilities }} </li>
                                        <li> <b>Education :</b> {{ $article->education }} </li>
                                        <li> <b>Experience :</b> {{ $article->experience }} </li>
                                        <li> <b>Job Type :</b> {{ $article->employment_status }} </li>
                                        <li> <b>Job Location :</b> {{ $article->location }} </li>
                                        <li> <b>Age :</b> {{ $article->age }} </li>
                                        <li> <b>Compensation :</b> {{ $article->compensation }} </li>
                                        <li><i class="far fa-calendar"></i> <b>Application Deadline:</b> {{ $article->date }} </li>
                                    </ul>



                                    {{-- Registration --}}
                                    <div class="text-center">
                                        <a href="{{ route('articleship.reg.create', $article->id) }}"
                                            class="btn btn-info btn-sm edit">Apply</a>
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
    <!-- Articleship area-end -->

@endsection
