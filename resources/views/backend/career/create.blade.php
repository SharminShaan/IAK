@extends('backend.layouts.master')
@section('title', 'Create-career')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Career </h1>
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

                        <!-- form start -->

                        <form action="{{ route('career.store') }}" method="Post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <input type="hidden" class="form-control" id="category_id" name="category_id"
                                    value="{{ $category->id }}">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Sub-Category</label>
                                <select name="subcats_id" id="" required>
                                    <option value="" disabled selected>Select one</option>

                                    @foreach ($datas as $data )
                                        <option value="{{ $data->id }}">{{ $data->sub_cat_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" class="form-control" id="job_title" name="job_title"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="date">Application Deadline</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="vacancy">Vacancy</label>
                                <input type="text" class="form-control" id="vacancy" name="vacancy">
                            </div>

                            <div class="form-group">
                                <label for="employment_status">Job Type</label>
                                <input type="text" class="form-control" id="employment_status" name="employment_status">
                            </div>


                            <div class="form-group">
                                <label for="location">Job Location</label>
                                <input type="text" class="form-control" id="location" name="location">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>

                            <div class="form-group">
                                <label for="responsibilities">Job Responsibilities</label>
                                <textarea class="form-control" name="responsibilities" id="responsibilities"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control" id="education" name="education">
                            </div>

                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" class="form-control" id="experience" name="experience">
                            </div>

                            <div class="form-group">
                                <label for="compensation">Compensation</label>
                                <input type="text" class="form-control" id="compensation" name="compensation">
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
