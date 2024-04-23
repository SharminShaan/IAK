@extends('frontend.layouts.master')
@section('title', 'Blog Details')
@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title text-center" data-aos="fade-down" data-aos-delay="0">Blog Details
                                </h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"  data-aos="fade-up" data-aos-delay="0">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" >Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape01.png')}}" alt="News Letter">
                    <img src="{{ asset('frontend/assets/img/images/breadcrumb_shape02.png')}}" alt="News Letter">
                </div>
            </section>
            <!-- breadcrumb-area-end -->
                 <!-- blog-details-area -->
                 <section class="blog-details-area pt-120 pb-120">
                    <div class="container">
                        <div class="blog-details-wrap">
                            <div class="row justify-content-center">
                                <div class="col-71">
                                    <div class="blog-details-thumb">
                                        <img src="{{ asset('/backendsite/blogimage/'.$blog->image)}}" alt="">
                                    </div>
                                    <div class="blog-details-content">
                                        <h2 class="title"> {{$blog->title}}</h2>
                                        <div class="blog-meta-three">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-calendar"></i>{{$blog->date}}</li>
                                                <li>by <a href="#"> Admin</a></li>
                                                <li><i class="fas fa-tags"></i> <a href="#">{{$blog->tags}}</a></li>
                                                {{-- <li><i class="flaticon-speech-bubble"></i><a href="#">05 Comments</a></li> --}}
                                            </ul>
                                        </div>
                                        <p> {{$blog->long_description}} </p>

                                        <blockquote>
                                            <p>“ {{$blog->quotation}} ”</p>
                                        </blockquote>

                                    </div>

                                </div>
                                <div class="col-29">
                                    <aside class="blog-sidebar">


                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog-details-area-end -->
@endsection
