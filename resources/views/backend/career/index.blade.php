@extends('backend.layouts.master')
@section('title', 'All-Career')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Career</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div>
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('career.create') }}" class="btn btn-info mb-3">Add New</a>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Job Title</th>
                            <th> Vacancy</th>
                            <th>Application Deadline</th>
                            <th> Job Location</th>
                            <th> Job Type</th>
                            <th> Job Responsibilities</th>
                            <th> Age</th>
                            <th> Education</th>
                            <th> Experience</th>
                            <th> Compensation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->job_title }}</td>
                                <td>{{ $row->vacancy }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->location }}</td>
                                <td>{{ $row->employment_status }}</td>
                                <td>{{ $row->responsibilities }}</td>
                                <td>{{ $row->age }}</td>
                                <td>{{ $row->education }}</td>
                                <td>{{ $row->experience }}</td>
                                <td>{{ $row->compensation }}</td>
                                <td>
                                    <a href="{{ route('career.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('career.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a>
                                            <button onclick="alert('Do You Want to Delete?')" type="submit"
                                                class="btn btn-sm btn-danger">Delete</button>
                                            {{-- <i class="fas fa-trash"></i> --}}
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
