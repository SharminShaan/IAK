@extends('backend.layouts.master')
@section('title', 'Create-Conatct')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Contact </h1>
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

                        <!-- form start -->

                        <form action="{{ route('contactus.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input type="text" class="form-control" name="location">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="link">Map</label>
                                <textarea  cols="20" rows="5"  class="form-control" name="link" ></textarea>
                                {{-- <input type="text" class="form-control" id="link" name="link"
                                    required> --}}
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
