@extends('backend.layouts.master')
@section('title', 'Registration')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registration All </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Registration List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            {{-- <a href="{{ route('registration.create') }}" class="btn btn-info mb-3">Add </a> --}}
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>

                            <th>SL</th>
                            <th> Type Name </th>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Address</th>
                            <th> Doc File</th>
                            <th> Service Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- type, type_id, type_name, name, email, phone, address, image, doc_file, service_type, service_name --}}

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->type_name }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>

                                <td>
                                    @if ($row->service_name)
                                    <{{ $row->address }} @else @endif
                                </td>

                                <td>
                                    @if ($row->image)
                                        <img src="{{ asset('backendsite/registration/' . $row->image) }}" alt="Image"
                                            width="100">
                                    @else
                                        Image Not Found
                                    @endif
                                </td>

                                <td>
                                    @if ($row->doc_file)
                                        <img src="{{ asset('backendsite/registration/' . $row->doc_file) }}" alt="image"
                                            width="100">
                                    @else
                                        Doc Not Found
                                    @endif
                                </td>



                                {{-- <td>
                                    <a href="{{ route('registration.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('registration.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a>
                                            <button onclick="alert('Do You Want to Delete?')" type="submit"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                    </form>

                                </td> --}}

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
