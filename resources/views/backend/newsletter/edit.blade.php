@extends('backend.layouts.master')
@section('title', 'Edit-newsletter')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Newsletter </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/newsletter/index') }}">All Newsletter</a></li>
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

                        <form action="{{ route('newsletter.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control" name="subtitle" required
                                    value="{{ $data->subtitle }}">
                            </div>

                            <div class="form-group">
                                <label for="short_description"> Short Paragraph</label>
                                <textarea class="form-control" name="short_description" id="short_description">{{ $data->short_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="long_description">Long Paragraph</label>
                                <textarea class="form-control" name="long_description" id="long_description">{{ $data->long_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File_Upload</label>
                                <input type="file" class="form-control" name="file_upload">
                            </div>

                            @isset($data->file_upload)
                                <a href="{{ asset('/backendsite/newimg/pdf' . $data->file_upload) }}" target="_blank" download
                                    class="download-btn"><i class="far fa-file-pdf"></i>PDF- {{ $data->file_upload }}</a>
                            @endisset

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <img src="{{ asset('backendsite/newimg/' . $data->image) }}" alt="newsletter-img"
                                    width="100">
                            </div>

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
