@extends('backend.layouts.master')
@section('title', 'Edit-affiliation')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Affiliation </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/client/index') }}">All Affiliation</a></li>
                        <li class="breadcrumb-item active">Edit Affiliation</li>
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
                            <h3 class="card-title">Edit Affiliation</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('affiliation.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Paragraph</label>
                                <input type="text" class="form-control" name="long_description" required
                                    value="{{ $data->long_description }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Link</label>
                                <input type="text" class="form-control" name="link" required
                                    value="{{ $data->link }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <img src="{{ asset('backendsite/images/' . $data->image) }}" alt="affililation-image"
                                    width="100">
                            </div>

                            <br>
                            <div class="form-group mb-3">

                                @php
                                    $cat_id = $data->subcats_id;
                                    $catdata = DB::table('sub_categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Sub-Category</label>
                                <select name="subcats_id" id="" required>
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
