@extends('frontend.layouts.master')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title" data-aos="fade-down" data-aos-delay="0">Blog
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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


    <!-- blog-area -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            <div class="row">

                                @foreach ($blogs as $blog)
                                    <div class="col-xl-4 col-lg-4 col-md-4 ">
                                        <div class="blog-post-item-four">
                                            <div class="blog-post-thumb-four">
                                                <!-- image must be 392/260  -->
                                                <img src="{{ asset('/backendsite/blogimage/' . $blog->image) }}"
                                                    alt="IAK Blog">
                                            </div>
                                            <div class="blog-post-content-four">
                                                <a href="{{ route('blog.details', $blog->id) }}"
                                                    class="tag">{{ $blog->tags }}</a>
                                                <div class="blog-meta-two">
                                                    <ul class="list-wrap">
                                                        <li><i class="far fa-calendar"></i>{{ $blog->date }}</li>
                                                        <li><i class="far fa-user"></i>by <a
                                                                href="{{ route('blog.details', $blog->id) }}">Admin</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h5 style="text-align:left !important;"> <a href="{{ route('blog.details', $blog->id) }}"> {{ $blog->title }}
                                                    </a></h5>
                                                <p></p>
                                                {{-- {{ route('blog.edit', $row->id) }} --}}
                                                <a href="{{ route('blog.details', $blog->id) }}" class="link-btn">
                                                    Read More <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{ $blogs->links() }}



                                {{-- @foreach ($blogs as $blog)
                                    <div class="col-md-6">
                                        <div class="blog-post-item-two">
                                            <div class="blog-post-thumb-two">
                                                <a href=""><img src="{{ asset('/backendsite/blogimage/') }}"
                                                        alt=""></a>
                                                <a href="" class="tag tag-two">Development</a>
                                            </div>
                                            <div class="blog-post-content-two">
                                                <h2 class="title"><a href="">Meet AutoManage, the best AI
                                                        management tools</a></h2>
                                                <p>Everything you need to start building area atching presence for your
                                                    business.</p>
                                                <div class="blog-meta">
                                                    <ul class="list-wrap">
                                                        <li>
                                                            Kat Doven</a>
                                                        </li>
                                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}



                            </div>

{{--
                            <div class="pagination-wrap mt-30">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item next-page"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div> --}}

                        </div>
                    </div>

                    {{-- <div class="col-29">
                        <aside class="blog-sidebar">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" placeholder="Search Here . . .">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="blog-widget">
                                <h4 class="bw-title">Categories</h4>
                                <div class="bs-cat-list">
                                    <ul class="list-wrap">
                                        <li><a href="#">Business <span>(02)</span></a></li>
                                        <li><a href="#">Consulting <span>(08)</span></a></li>
                                        <li><a href="#">Corporate <span>(05)</span></a></li>
                                        <li><a href="#">Design <span>(02)</span></a></li>
                                        <li><a href="#">Fashion <span>(11)</span></a></li>
                                        <li><a href="#">Marketing <span>(12)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->



    <!-- blog-details-area-end -->
@endsection
