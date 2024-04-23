@extends('backend.layouts.master')
@section('title', 'All-Team')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meet Our Team </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Team List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Team Member</h3>
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('team.create') }}" class="btn btn-info mb-3">Add New</a>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th> Name</th>
                            <th> Designation</th>
                            <th> Experience</th>
                            <th> Specialization</th>
                            {{-- <th> Line Text</th> --}}
                            <th> Email</th>
                            <th> Phone</th>
                            {{-- <th> Long Paragraph</th> --}}
                            {{-- <th> Facebook</th>
                            <th> Twitter</th>
                            <th> Instagram</th> --}}
                            <th> Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td width="100" >{{ $row->designation }}</td>
                                <td>{{ $row->experience }}</td>
                                <td>{{ $row->specialization }}</td>
                                {{-- <td>{{ $row->short_text }}</td> --}}
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                {{-- <td width="100">{{ $row->long_description }}</td> --}}
                                {{-- <td>{{ $row->facebook }}</td>
                                <td>{{ $row->twitter }}</td>
                                <td>{{ $row->instagram }}</td> --}}

                                <td>
                                    @if ($row->image)
                                        <img src="{{ asset('backendsite/teamimg/' . $row->image) }}" alt="team-image"
                                            width="100">
                                    @else
                                        Image Not set
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('team.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('team.destroy', $row->id) }}" method="POST">
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
