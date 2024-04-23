@extends('backend.layouts.master')
@section('title', 'Edit-Page Setup')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Page Setup </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/pagesetup/index') }}">All Page Setup</a></li>
                        <li class="breadcrumb-item active">Edit Page Setup</li>
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

                        <form action="{{ route('pagesetup.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Short Description</label>
                                <textarea name="short_description" class="form-control" id="" cols="20" rows="5">{{ $data->short_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                @isset($data->image)
                                    <img src="{{ asset('backendsite/pagesetupimg/' . $data->image) }}" alt="category-image"
                                        width="100">
                                @endisset

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 02</label>
                                <input type="file" class="form-control" name="image2"> <br>
                                @isset($data->image2)
                                    <img src="{{ asset('backendsite/pagesetupimg/' . $data->image2) }}" alt="category-image"
                                        width="100">
                                @endisset

                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image 03</label>
                                <input type="file" class="form-control" name="image3"> <br>
                                @isset($data->image3)
                                    <img src="{{ asset('backendsite/pagesetupimg/' . $data->image3) }}" alt="category-image"
                                        width="100">
                                @endisset

                            </div>

                            <br>

                            <div class="form-group mb-3">

                                @php
                                    $cat_id = $data->category_id;
                                    $catdata = DB::table('categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <select name="category_id" id="" required>
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->category_name }}
                                    </option>

                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group mb-3">

                                @php
                                    $subcat_id = $data->subcats_id;
                                    $subcatdata = DB::table('sub_categories')->where('id', '=', $subcat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Sub-Category Page</label>
                                <select name="subcats_id" id="" required>
                                    <option value="{{ $subcatdata[0]->id }}" selected> {{ $subcatdata[0]->sub_cat_name }}
                                    </option>

                                    @foreach ($datas as $subcatdata)
                                        <option value="{{ $subcatdata->id }}">{{ $subcatdata->sub_cat_name }}</option>
                                    @endforeach

                                </select>
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
