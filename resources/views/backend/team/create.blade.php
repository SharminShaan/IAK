@extends('backend.layouts.master')
@section('title', 'Create-Team')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Team </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Team</li>
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

                        <form action="{{ route('team.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="form-group">
                                <label  class="form-label">Parent Category</label>
                                <select name="category_id"  >

                                    @foreach ($category as $cat )
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Sub Category</label>
                                <select name="subcats_id" id="" required>

                                    @foreach ($datas as $data )
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
                                    @endforeach

                                </select>
                            </div> --}}

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="subcats_id" name="subcats_id"
                                    value="{{ $datas->id }}">
                            </div>


                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation"
                                    required>
                            </div>




                            <div class="form-group">
                                <label for="experience">Year Of Experience</label>
                                <input type="text" class="form-control" id="experience" name="experience"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="specialization">Specialization</label>
                                <input type="text" class="form-control" id="specialization" name="specialization"
                                    required>
                            </div>

                            {{-- <div class="form-group">
                                <label for="short_text">Line Text</label>
                                <input type="text" class="form-control" id="short_text" name="short_text"
                                    required>
                            </div> --}}

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    >
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    >
                            </div>

                            <div class="form-group">
                                <label for="short_text">Short Text</label>
                                <textarea class="form-control" name="short_text" id="short_text"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" name="short_description" id="short_description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea class="form-control" name="long_description" id="long_description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook">
                            </div>

                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter">
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <small>Image Size: 200x200 PX</small>
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
