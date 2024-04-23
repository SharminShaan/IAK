@extends('backend.layouts.master')
@section('title', 'Edit-Subcategory')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Subcategory </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/subcategory/index') }}">Subcategory</a></li>
                        <li class="breadcrumb-item active">Edit Subcategory</li>
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
                            <h3 class="card-title">Edit Subcategory</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{-- <form action="{{ route('subcategory.update', $data->id) }}" method="Post" --}}
                        <form action="{{ route('subcategory.update', ['id' => $data->id]) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label for="category_name">Subcategory Name</label>
                                <input type="text" class="form-control" name="sub_cat_name" required
                                    value="{{ $data->sub_cat_name }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ $data->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <img src="{{ asset('backendsite/images/' . $data->image) }}" alt="Subcat-image"
                                    width="100">
                            </div>

                            <br>
                            <div class="form-group mb-3">
                                @php
                                    $cat_id = $data->cat_id;
                                    $catdata = DB::table('categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Parent Category</label>
                                <select name="cat_id" id="" required>
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->category_name }}
                                    </option>

                                    @foreach ($catdatas as $data)
                                        <option value="{{ $data->id }}">{{ $data->category_name }}</option>
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
