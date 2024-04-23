@extends('backend.layouts.master')
@section('title', 'Edit-Contacts')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Contact </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/contactus/index') }}">All Contacts</a></li>
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

                        <form action="{{ route('contactus.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="location">Address</label>
                                <input type="text" class="form-control" name="location" required
                                    value="{{ $data->location }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" required
                                    value="{{ $data->email }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" required
                                    value="{{ $data->phone }}">
                            </div>


                            <div class="form-group">
                                <label for="link">Map</label>
                                <textarea  cols="20" rows="5"  class="form-control" name="link" >{{ $data->link }}</textarea>
                                {{-- <input type="text" class="form-control" name="link"
                                    value="{{ $data->link }}"> --}}
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
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
