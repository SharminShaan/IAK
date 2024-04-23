@extends('backend.layouts.master')
@section('title', 'create-Page Setup')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Page Setup </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">All page setup</li>
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
                    <div class="card card-primary">
                        <!-- form start -->

                        <form action="{{ route('pagesetup.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label">Parent Page</label>
                                <select name="category_id" required>
                                    <option value="" disabled selected> Select One </option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Sub Page Category</label>
                                <select name="subcats_id" id="" required>
                                    <option value="" disabled selected>Select one</option>

                                    @foreach ($datas as $data)
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" id="name" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Short Description</label>
                                <textarea name="short_description"  class="form-control" id="" cols="20" rows="5"></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 01</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 02</label>
                                <input type="file" class="form-control" name="image2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 03</label>
                                <input type="file" class="form-control" name="image3">
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
