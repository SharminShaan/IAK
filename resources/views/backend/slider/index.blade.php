
@extends('backend.layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Slider Option</h1>
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
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Slider Table</h3>

    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{route('slider.create')}}" class="btn btn-info mb-3">Add Slideer</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Slider SubHeading</th>
          <th>Slider Heading</th>
          <th>Slider Paragraph</th>
          <th>Slider Image</th>
          <th>Slider Button</th>
          <th>Action</th>

        @foreach ($sliderData  as $key =>$row)
        <tr>
          <td>{{$row->subheading}}</td>
          <td>{{$row->heading}}</td>
          <td>{{$row->paragraph}}</td>

          <td>
            <img src="{{asset('backendsite/images/slider/'.$row->slideimage)}}" width="200px"alt="Slider Image">
        </td>
          <td>{{$row->button_text}}</td>
        <td>
            <a href="{{route('slider.edit',$row->id)}}" class="btn btn-success">Edit</a>
            <a onclick="alert('Are you sure want to delete?')"  href="{{route('slider.delete',$row->id)}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection
