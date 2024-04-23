@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Company Profile</li>
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
                <div class=" col-lx-12 col-lg-12 col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="category_id" name="category_id"
                                                value="{{ $data->category_id }}">
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="subcats_id" name="subcats_id"
                                                value="{{ $data->subcats_id }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="heading">Title </label>
                                            <input type="text" class="form-control" id="heading" name="title"
                                                value="{{ $data->title }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subheading">Short Paragraph</label>
                                            <textarea class="form-control" id="subheading" rows="3" name="short_description">{{ $data->short_description }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="details" class="form-label">Long Paragraph</label>
                                            <textarea class="form-control" id="details" rows="3" name="long_description">{{ $data->long_description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        @isset($data->image)
                                        <img src="{{ asset('backendsite/images/' . $data->image) }}"
                                            width="100px"alt="Profile Image">
                                        @endisset


                                        <div class="form-group">
                                            <label for="exampleInputFile">Youtube</label>
                                            <input type="text" class="form-control" name="youtube" value="{{ $data->youtube }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">File_Upload</label>
                                            <input type="file" class="form-control" name="file_upload">
                                        </div>

                                        @isset($data->file_upload)
                                        <a href="{{ asset('/backendsite/fileupload/'. $data->file_upload)}}" target="_blank" download class="download-btn"><i class="far fa-file-pdf"></i>PDF- {{$data->file_upload}}</a>
                                        @endisset

                                    </div>
                                </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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
