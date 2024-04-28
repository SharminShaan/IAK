@extends('backend.layouts.master')
@section('title', 'Edit-Membership')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Membership </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/membership/index') }}">All Membership</a></li>
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
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('membership.update', $data->id) }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="long_description">Paragraph</label>
                                <textarea class="form-control" name="long_description" id="long_description">{{ $data->long_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link" required
                                    value="{{ $data->link }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Logo</label>
                                <input type="file" class="form-control" name="logo"> <br>
                                <span>Size: 40 x 40 px</span>
                                <img src="{{ asset('backendsite/memimg/' . $data->logo) }}" alt="membership-logo"
                                    width="100">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <span>Size: 300 x 300 px</span>
                                <img src="{{ asset('backendsite/memimg/' . $data->image) }}" alt="membership-logo"
                                    width="100">
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

                            {{-- <div class="form-group mb-3">

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
                            </div> --}}

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
