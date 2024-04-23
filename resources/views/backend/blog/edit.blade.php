@extends('backend.layouts.master')
@section('title', 'Edit-Blog')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Blog </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/blog/index') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                            <h3 class="card-title">Edit Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{-- <form action="{{ route('subcategory.update', $data->id) }}" method="Post" --}}
                        <form action="{{ route('blog.update', ['id' => $data->id]) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>
                            {{-- <div class="form-group">
                                <label for="date">Upload Date</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    required value="{{ $data->date }}">
                            </div> --}}
                            {{-- <div class="form-group">
                                <input type="hidden" class="form-control" id="uploaded_by" name="uploaded_by"
                                    required value="{{auth()->user()->name}}" >
                            </div> --}}
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" name="short_description" id="short_description">{{ $data->short_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea class="form-control" name="long_description" id="long_description">{{ $data->long_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="quotation">Quotation</label>
                                <input type="text" class="form-control" name="quotation" id="quotation" value="{{ $data->quotation }}"></input>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags" value="{{ $data->tags }}"></input>
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <img src="{{ asset('backendsite/blogimage/' . $data->image) }}" alt="Blog-image"
                                    width="100">
                            </div>

                            <br>
                            <div class="form-group mb-3">
                                @php
                                    $cat_id = $data->blog_cat_id;
                                    $catdata = DB::table('blog_cats')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <select name="blog_cat_id" id="" required>
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->blog_cat_name }}
                                    </option>

                                    @foreach ($catdatas as $data)
                                        <option value="{{ $data->id }}">{{ $data->blog_cat_name }}</option>
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
