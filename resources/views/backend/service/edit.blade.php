@extends('backend.layouts.master')
@section('title', 'Edit-service')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Service Content </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/servicecon/index') }}">All Service Content</a></li>
                        <li class="breadcrumb-item active">Edit Service Content</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Edit Service Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{-- <form action="{{ route('subcategory.update', $data->id) }}" method="Post" --}}
                        {{-- <form action="{{ route('servicecon.update', ['id' => $data->id]) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label for="name">Service Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $data->name }}">
                            </div>


                            <br>
                            <div class="form-group mb-3">
                                @php
                                    $cat_id = $data->cat_id;
                                    $catdata = DB::table('sub_categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Parent Category</label>
                                <select name="cat_id" id="" >
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->category_name }}
                                    </option>

                                    @foreach ($catdatas as $data)
                                        <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="Submit" class="btn btn-primary">Update</button>

                        </form> --}}

                        <form action="{{ route('servicecon.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Service Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $data->name }}">
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link"
                                    value="{{ $data->link }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo"> <br>
                                <img src="{{ asset('backendsite/servicelogo/' . $data->logo) }}" alt="service-logo"
                                    width="100">
                            </div>

                            <div class="form-group">
                                <label for="long_description">Description <small>(Only for Actuarial & IPR Services)</small></label>
                                <textarea class="form-control" cols="20" rows="10" id="long_description" name="long_description">{{ $data->long_description }}</textarea>
                            </div>

                            <br>
                            <div class="form-group mb-3">

                                @php
                                    $cat_id = $data->subcats_id;
                                    $catdata = DB::table('sub_categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Sub-Category</label>
                                <select name="subcats_id" id="" >
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->sub_cat_name }}
                                    </option>

                                    @foreach ($sub_cat as $data)
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
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
