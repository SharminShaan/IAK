@extends('backend.layouts.master')
@section('title', 'Edit-Team')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Team </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/team/index') }}">All Team</a></li>
                        <li class="breadcrumb-item active">Edit Team</li>
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

                        <form action="{{ route('team.update', $data->id) }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $data->name }}">
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="designation"
                                    value="{{ $data->designation }}">
                            </div>



                            <div class="form-group">
                                <label for="experience">Year Of Experience</label>
                                <input type="text" class="form-control" id="experience" name="experience"
                                    value="{{ $data->experience }}">
                            </div>

                            <div class="form-group">
                                <label for="specialization">Specialization</label>
                                <input type="text" class="form-control" id="specialization" name="specialization"
                                     value="{{ $data->specialization }}">
                            </div>

                            <div class="form-group">
                                <label for="short_text">Short Text</label>
                                <textarea class="form-control" name="short_text" id="short_text">{{ $data->short_text }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $data->email }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $data->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" name="short_description" id="short_description">{{ $data->short_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="long_description">Long Description</label>
                                <textarea class="form-control" name="long_description" id="long_description">{{ $data->long_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    value="{{ $data->facebook }}">
                            </div>

                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    value="{{ $data->twitter }}">
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    value="{{ $data->instagram }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"> <br>
                                <small>Image Size: 200x200 PX</small> <br>
                                <img src="{{ asset('backendsite/teamimg/' . $data->image) }}" alt="team-image"
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
                                <select name="subcats_id" id="" >
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
