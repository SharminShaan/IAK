@extends('frontend.layouts.master')
@section('title', 'Search')
@section('content')

    <br><br>

    <section class="about-area-seven  pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">

                    @if (isset($contents))
                        @forelse ($contents as $con)
                            <div class="con-list">
                                <p>{{ $con->title }}</p>
                                <p>{{ $con->name }}</p>
                            </div>
                        @empty
                        @endforelse

                    @endif


                    @if (isset($blogs))
                        @foreach ($blogs as $blog)
                            <div class="blog-list">
                                <p>{{ $blog->title }}</p>
                                <p>{{ $blog->name }}</p>
                            </div>
                        @endforeach

                    @endif

                    @if (isset($categories))
                        @foreach ($categories as $cat)
                            <div class="blog-list">
                                <p>{{ $cat->category_name }}</p>
                            </div>
                        @endforeach

                    @endif

                    @if (isset($subcategories))
                        @foreach ($subcategories as $subcat)
                            <div class="blog-list">
                                <p>{{ $subcat->sub_cat_name }}</p>
                            </div>
                        @endforeach

                    @endif


                    @if (blank($contents) && blank($blogs) && blank($categories) && blank($subcategories))
                        <p>Not found!</p>
                    @endif



                </div>
            </div>
        </div>
    </section>
@endsection
