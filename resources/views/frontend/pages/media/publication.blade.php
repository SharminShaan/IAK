@extends('frontend.layouts.master')
@section('title', 'Publication')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Publication
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Publication</li>
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

    {{-- Publication --}}

    <section class="about-area-six ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10  mt-5">
                    <div class="section-title section-title-three text-center mb-60 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">DOWNLOADS Legal Documents</span>
                        <h2 class="title tg-element-title">Download your desired documents from here...
                        </h2>

                    </div>
                </div>
                <div class="col-lg-10 col-md-10 mb-5">
                    <div class="services-widget">
                        <h4 class="sw-title"> Download Company Documents</h4>
                        <div class="services-brochure-wrap">
                            @foreach ($publications as $publication)


                            <a href="{{ $publication->link }}" target="_blank" download
                                class="download-btn"><i class="far fa-file-pdf"></i>{{$publication->title}}</a>
                            {{-- <a href="assets/images/New-VAT-SRO-No.-132-Law-2020-127-Mushak.pdf" target="_blank" download
                                class="download-btn"><i
                                    class="far fa-file-pdf"></i>New-VAT-SRO-No.-132-Law-2020-127-Mushak</a>
                            <a href="assets/images/Finance_Act_2020.pdf" target="_blank" download class="download-btn"><i --}}
                                    {{-- class="far fa-file-alt"></i>Finance_Act_2020</a> --}}



                            @endforeach

                                    <!-- Button trigger modal -->
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary"
                                data-mdb-modal-init data-mdb-target="#staticBackdrop2">
                                <i class="far fa-file-alt"></i> Download PDF: Finance_Act_2020
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                                aria-hidden="true">
                                <div class="modal-dialog d-flex justify-content-center">
                                    <div class="modal-content w-75">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel2">Fill up</h5>
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form>
                                                <!-- Name input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="text" id="name2" class="form-control" />
                                                    <label class="form-label" for="name2">Name</label>
                                                </div>

                                                <!-- Email input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="email" id="email2" class="form-control" />
                                                    <label class="form-label" for="email2">Email address</label>
                                                </div>

                                                <!-- password input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" id="password2" class="form-control" />
                                                    <label class="form-label" for="password2">Password</label>
                                                </div>

                                                <!-- Submit button -->
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-block" data-mdb-dismiss="modal"
                                                    aria-label="Close"> Download
                                                </button>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- publications-area-end -->

@endsection

@push('styles')
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
@endpush
