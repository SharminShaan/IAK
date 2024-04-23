@extends('backend.layouts.master')
@section('title', 'Create-Blog')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog-List </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
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
                            <h3 class="card-title">Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('blog.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf

                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Blog Category</label>
                                <select name="blog_cat_id" id="" required>
                                    <option value="" disabled selected>Select one</option>

                                    @foreach ($datas as $data )
                                        <option value="{{ $data->id }}">{{ $data->blog_cat_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Blog Title *</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    required placeholder="Enter Title" >
                            </div>
                            {{-- <div class="form-group">
                                <label for="date">Upload Date</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    required>
                            </div> --}}
                            {{-- <div class="form-group">
                                <input type="hidden" class="form-control" id="uploaded_by" name="uploaded_by"
                                    required value="{{auth()->user()->name}}" >
                            </div> --}}
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" name="short_description" id="short_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea class="form-control" name="long_description" id="long_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="quotation">Quotation</label>
                                <input type="text" class="form-control" name="quotation" id="quotation"></input>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags"></input>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
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
