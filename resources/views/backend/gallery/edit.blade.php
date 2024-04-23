@extends('backend.layouts.master')
@section('title', 'Edit-gallery')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Gallery </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/gallery/index') }}">All gallery</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class=" col-lx-10 col-lg-10 col-md-10">

                    <div class="card card-primary">

                        <!-- form start -->

                        <form action="{{ route('gallery.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="long_description">Description</label>
                                <textarea class="form-control" name="short_description" id="short_description">{{ $data->short_description }}</textarea>
                            </div>



                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>

                                @isset($data->image)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image) }}" alt="gallery-image"
                                        width="100">
                                @endisset

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 2</label>
                                <input type="file" class="form-control" name="image2"> <br>
                                @isset($data->image2)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image2) }}" alt="gallery-image"
                                        width="100">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 3</label>
                                <input type="file" class="form-control" name="image3"> <br>
                                @isset($data->image3)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image3) }}" alt="gallery-image"
                                        width="100">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 4</label>
                                <input type="file" class="form-control" name="image4"> <br>
                                @isset($data->image4)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image4) }}" alt="gallery-image"
                                        width="100">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 5</label>
                                <input type="file" class="form-control" name="image5"> <br>
                                @isset($data->image5)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image5) }}" alt="gallery-image"
                                        width="100">
                                @endisset
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 6</label>
                                <input type="file" class="form-control" name="image6"> <br>
                                @isset($data->image6)
                                    <img src="{{ asset('backendsite/gallery/' . $data->image6) }}" alt="gallery-image"
                                        width="100">
                                @endisset
                            </div>


                            <br>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="subcats_id" name="subcats_id"
                                    value="{{ $datas->id }}">
                            </div>


                            <button type="Submit" class="btn btn-primary">Update</button>

                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
