@extends('backend.layouts.master')
@section('title', 'Create-gallery')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Gallery </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/gallery/index') }}">All Gallery</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class=" col-lx-10 col-lg-10 col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- form start -->

                        <form action="{{ route('gallery.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="subcats_id" name="subcats_id"
                                    value="{{ $datas->id }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="short_description">Description</label>
                                <textarea class="form-control" name="short_description" id="short_description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 2</label>
                                <input type="file" class="form-control" name="image2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 3</label>
                                <input type="file" class="form-control" name="image3">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 4</label>
                                <input type="file" class="form-control" name="image4">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 5</label>
                                <input type="file" class="form-control" name="image5">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 6</label>
                                <input type="file" class="form-control" name="image6">
                            </div>

                            <button type="Submit" class="btn btn-primary">Submit</button>

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
