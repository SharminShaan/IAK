@extends('backend.layouts.master')
@section('title', 'All-Category')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Option</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category</h3>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>



        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('category.create') }}" class="btn btn-info mb-3">Add Category</a>

            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $row->category_name }}</td>
                            <td>
                                <a href="{{ route('category.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                        class="fas fa-edit"></i></a>

                                {{-- <form action="{{ route('category.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a>
                                        <button onclick="alert('Are You Sure Delete?')" type="submit" class="btn btn-sm btn-danger">Delete</button>

                                    </a>
                                </form> --}}




                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
@endsection
