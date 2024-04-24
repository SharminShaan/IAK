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
                <div class="col-lg-6 col-md-6 order-0 order-lg-2">
                    <div class="">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Apply for Job</span>
                            <p>The candidates should have good written and verbal communication skills, analytical ability,
                                strong academic background, computer literacy and a passion to learn and attain newer skills
                                with time.</p>
                        </div>
                    </div>

                    <!-- job form start -->
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">APPLY NOW</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apply for Job</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <input type="hidden" class="form-control" name="type" value="2">
                                            <input type="hidden" class="form-control" name="type_id" value="5">
                                            <input type="hidden" class="form-control" name="type_name" value="Accounts">


                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="name" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="email" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="phone" class="col-form-label">Phone Number:</label>
                                                    <input type="number" class="form-control" id="phone"
                                                        name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="address" class="col-form-label">Address:</label>
                                                    <input type="text" id="address" name="address">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="cvfile" class="col-form-label">Attached CV:</label>
                                                    <input type="file" id="cvfile" name="doc_file">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="image" class="col-form-label">Image:</label>
                                                    <input type="file" id="image" name="image">
                                                </div>
                                            </div>


                                            <div class="mb-1">
                                                <label for="image" class="col-form-label">Service Type:</label>
                                                <select name="service_name" id="">
                                                    <option value="" selected disabled> Select One </option>
                                                    <option value=""> Audit </option>
                                                    <option value=""> Tax </option>
                                                </select>
                                            </div>

                                            <div class="mb-1">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>

                                            <button type="submit" class="">Send</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

                {{-- <div class="col-xl-6 col-lg-6 ">
                    <div class="about-content-two">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Career Professional</span>

                            <table class="table table-bordered">
                                <tr>
                                    <th>Job Title </th>
                                    <th> Apply </th>
                                </tr>
                                <tr>
                                    <td>Finance Officer</td>
                                    <td><a href="{{ route('event.reg.create', 1) }}"
                                            class="btn btn-info btn-sm edit">Apply</a>
                                    </td>

                                </tr>

                                <tr>
                                <td>Sr. Executive (Accounting)</td>
                                    <td><a href="{{ route('event.reg.create', 1) }}"
                                        class="btn btn-info btn-sm edit">Apply</a>
                                </td>
                                </tr> --}}

                <div class="row">
                    @foreach ($profs as $prof)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                            <div class="services-item-three">
                                <div class="">
                                    <ul>
                                        <li class="title">Job Title : {{ $prof->job_title }} </li>
                                        <li><i class="far fa-calendar"></i> Application Deadline: {{ $prof->date }} </li>
                                        <li> Vacancy : {{ $prof->vacancy }} </li>
                                        <li> Job Type : {{ $prof->employment_status }} </li>
                                        <li> Job Location : {{ $prof->location }} </li>
                                        <li> Age : {{ $prof->age }} </li>
                                        <li> Education : {{ $prof->education }} </li>
                                        <li> Experience : {{ $prof->experience }} </li>
                                        <li> Compensation : {{ $prof->compensation }} </li>
                                        <li> Job Responsibilities : {{ $prof->responsibilities }} </li>
                                    </ul>



                                    {{-- Registration --}}
                                    <a href="{{ route('event.reg.create', 1) }}"
                                            class="btn btn-info btn-sm edit">Apply</a>

                                    <div class="overlay-icon">
                                        <i class="flaticon-healthcare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- @foreach ($category as $key => $row)
                                    <tr>
                                        <td>{{ $row->category_name }}</td>
                                        <td>
                                            <a href="{{ route('event.reg.create', $row->id) }}"
                                                class="btn btn-info btn-sm edit">Apply</a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                {{-- </table>

                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>
@endsection
