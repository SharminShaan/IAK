@extends('backend.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Theme Option</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Slider Option</li>
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
                            <h3 class="card-title">Slider Option</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                            @csrf

                            <br>
                            <div class="form-group">
                                <label for="exampleInputFile">Slide Image</label>
                                <input type="file" class="form-control" name="slideimage">
                                <small>Size: 1200 X 600 PX</small>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="subheading"> Slider Sub Heading</label>
                                    <input type="text" class="form-control" id="subheading" name="subheading">
                                    {{-- <input type="text" class="form-control" id="subheading" name="subheading" value="{{$sliderData->subheading}}"> --}}
                                </div>

                                <div class="form-group">
                                    <label for="heading">Slider Heading</label>
                                    <input type="text" class="form-control" id="heading" name="heading">
                                </div>

                                <div class="form-group">
                                    <label for="paragraph">Slider Paragraph</label>
                                    <input type="text" class="form-control" id="paragraph" name="paragraph">
                                </div>
                                <div class="form-group">
                                    <label for="button_text">Slider Button</label>
                                    <input type="text" class="form-control" id="button_text" name="button_text">
                                </div>

                            </div>
                            <!-- /.card-body -->

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
