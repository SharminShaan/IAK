@extends('backend.layouts.master')
@section('title', 'All-Contacts')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
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
            <a href="{{ route('contactus.create') }}" class="btn btn-info mb-3">Add New</a>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th> Title</th>
                            <th> Address</th>
                            <th> Emaiil</th>
                            <th width="100"> Phone</th>
                            {{-- <th width="100"> Map</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->location }}</td>
                                <td>{{ $row->email }}</td>
                                <td width="100" >{{ $row->phone }}</td>
                                {{-- <td width="100" >{{ $row->link }}</td> --}}
                                <td>
                                    <a href="{{ route('contactus.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('contactus.destroy', $row->id) }}" method="POST">
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
