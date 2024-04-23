@extends('backend.layouts.master')
@section('title', 'create-Registration')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registration </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Registration</li>
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
                    <div class="card card-primary">
                        <!-- form start -->

                        <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <input type="hidden" class="form-control" name="type" value="2">
                                <input type="hidden" class="form-control" name="type_id" value="{{ $data->id }}">
                                <input type="hidden" class="form-control" name="type_name" value="{{ $data->category_name }}">

                                {{-- type, type_id, type_name, name, email, phone, address, image, doc_file, service_type, service_name --}}

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="name" class="col-form-label">Name:*</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="email" class="col-form-label">Email:*</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="phone" class="col-form-label">Phone Number:*</label>
                                        <input type="number" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="address" class="col-form-label">Address:</label>
                                        <input type="text" id="address" name="address">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="cvfile" class="col-form-label">Attached CV:</label>
                                        <input type="file" id="cvfile" name="doc_file">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="image" class="col-form-label">Image:</label>
                                        <input type="file" id="image" name="image">
                                    </div>
                                </div> <br>


                                <div class="mb-1">
                                    <label for="image" class="col-form-label">Service Type:</label>
                                    <select name="service_name" id="">
                                        <option value="" selected disabled> Select One </option>
                                        <option value="Audit"> Audit </option>
                                        <option value="Tax"> Tax </option>
                                    </select>
                                </div>

                                <div class="mb-1">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>  <br>
                                </div>

                                <div class="mb-1 text-center">
                                    <br> <button type="submit" class=" btn btn-success">Send</button>
                                </div>

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
