@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Contact
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

    <section class="inner-contact-area ">
        <div class="container">
            <div class="row align-items-center">

                <div class="">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>

                @foreach ($contacts as $contact)
                    <div class="col-lg-6">
                        <div class="inner-contact-info">

                            <div class="contact-info-item">
                                <h5 class="title-two"> {{ $contact->title }} </h5>
                                <hr>
                                <ul class="list-wrap">
                                    <li> {{ $contact->location }} </li>
                                    <li> {{ $contact->email }} </li>
                                    <li> {{ $contact->phone }} </li>
                                </ul>
                                <iframe src="{{ $contact->link }}" width="400" height="200" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            <div class="row ">

                <div class="col-xl-3 col-lg-3 col-md-3">
                    {{-- <div class="inner-contact-img">
                        <img src="{{ asset('frontend/assets/images/contactimg.jpg') }}" alt="IAK Contact">
                    </div> --}}
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services-widget">



                        <h4 class="sw-title text-center">Feel Free To Consulting</h4>
                        <div class="services-widget-form">
                            <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" class="form-control" name="type" value="4">
                                <input type="hidden" class="form-control" name="type_id" value="4">
                                <input type="hidden" class="form-control" name="type_name" value="contact">

                                <div class="form-grp">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-grp">
                                    <input type="email" name="email" placeholder="E-mail Address" required>
                                </div>
                                <div class="form-grp">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>


                                <div class="form-group">
                                    <label for="" class="form-label">Service Type</label>
                                    <select name="service_name" id="" required>
                                        <option value="" disabled selected>Select one</option>

                                        @foreach ($subcats as $subcat )
                                            <option value="{{ $subcat->sub_cat_name }}">{{ $subcat->sub_cat_name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-grp">
                                    <textarea name="message" placeholder="Type Your Message"></textarea>

                                </div>
                                <button type="submit" class="submit-btn text-center">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <!-- contact-area-end -->
    <!-- contact-map -->
    {{-- <div class="contact-map d-xl-block d-sm-block">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.052333356029!2d90.41470397410147!3d23.781150687597425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77d54bfabc5%3A0x1d61d178e5fb413!2sZ%20Tower!5e0!3m2!1sen!2sbd!4v1710493016718!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div> --}}
@endsection
