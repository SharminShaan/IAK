@extends('backend.layouts.master')
@section('title', 'Edit-career')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Career </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/career/index') }}">All Careers</a></li>
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

                        <form action="{{ route('career.update', $data->id) }}" method="Post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" class="form-control" name="job_title"
                                    value="{{ $data->job_title }}">
                            </div>

                            <div class="form-group">
                                <label for="date">Application Deadline</label>
                                <input type="date" class="form-control" id="date" name="date"
                                     value="{{ $data->date }}">
                            </div>

                            <div class="form-group">
                                <label for="vacancy">Vacancy</label>
                                <input type="text" class="form-control" id="vacancy" name="vacancy"
                                value="{{ $data->vacancy }}">
                            </div>

                            <div class="form-group">
                                <label for="employment_status">Job Type</label>
                                <input type="text" class="form-control" id="employment_status" name="employment_status"
                                value="{{ $data->employment_status }}">
                            </div>

                            <div class="form-group">
                                <label for="location">Job Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                value="{{ $data->location }}">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age"
                                value="{{ $data->age }}">
                            </div>

                            <div class="form-group">
                                <label for="responsibilities">Job Responsibilities</label>
                                <textarea class="form-control" name="responsibilities" id="responsibilities">{{ $data->responsibilities }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control" name="education" value="{{ $data->education }}">
                            </div>

                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" class="form-control" name="experience" value="{{ $data->experience }}">
                            </div>

                            <div class="form-group">
                                <label for="compensation">Compensation</label>
                                <input type="text" class="form-control" name="compensation" value="{{ $data->compensation }}">
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group mb-3">

                                @php
                                    $cat_id = $data->subcats_id;
                                    $catdata = DB::table('sub_categories')->where('id', '=', $cat_id)->get();
                                @endphp

                                <label for="exampleInputEmail1" class="form-label">Sub-Category</label>
                                <select name="subcats_id" id="" required>
                                    <option value="{{ $catdata[0]->id }}" selected> {{ $catdata[0]->sub_cat_name }}
                                    </option>

                                    @foreach ($datas as $data)
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
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
