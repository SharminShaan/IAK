@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Who We Are </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Who-We-Are </li>
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
                <div class=" col-lx-12 col-lg-12 col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Who We Are </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('whoweare.update') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="heading">Heading </label>
                                            <input type="text" class="form-control" id="heading" name="heading"
                                                value="{{ $whoweare->heading }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subheading">Sub Heading</label>
                                            <input type="text" class="form-control" id="subheading" name="subheading"
                                                value="{{ $whoweare->subheading }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label"> Paragraph</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paragraph">{{ $whoweare->paragraph }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Who We Are Image 01</label>
                                            <small>[ Image must be 439*508 px ]</small>
                                            <input type="file" class="form-control" name="image1">
                                        </div>

                                        <img src="{{ asset('backendsite/images/homepage/' . $whoweare->image1) }}"
                                            width="100px"alt="Who We are Image">

                                        <div class="form-group">
                                            <label for="exampleInputFile">Who We Are Image 02</label>
                                            <small>[ Image must be 247*247 px ]</small>
                                            <input type="file" class="form-control" name="image2">
                                        </div>

                                        <img src="{{ asset('backendsite/images/homepage/' . $whoweare->image2) }}"
                                            width="100px"alt="Who We are Image">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="list1">List Text 1</label>
                                        <input type="text" class="form-control" id="list1" name="list1"
                                            value="{{ $whoweare->list1 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="list2">List Text 2</label>
                                        <input type="text" class="form-control" id="list2" name="list2"
                                            value="{{ $whoweare->list2 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="list3">List Text 3</label>
                                        <input type="text" class="form-control" id="list3" name="list3"
                                            value="{{ $whoweare->list3 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="list4">List Text 4</label>
                                        <input type="text" class="form-control" id="list4" name="list4"
                                            value="{{ $whoweare->list4 }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Bottom Paragraph</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bottomparagraph">{{ $whoweare->bottomparagraph }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="yearsparagraph">Years</label>
                                        <input type="number" class="form-control" id="years" name="years"
                                            value="{{ $whoweare->years }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="years">Years Text</label>
                                        <input type="text" class="form-control" id="yearsparagraph"
                                            name="yearsparagraph" value="{{ $whoweare->yearsparagraph }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
