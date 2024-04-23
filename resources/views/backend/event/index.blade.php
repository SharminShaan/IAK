@extends('backend.layouts.master')
@section('title', 'All-Events')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Event</li>
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
            <a href="{{ route('event.create') }}" class="btn btn-info mb-3">Add New</a>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th> Title</th>
                            <th> Date</th>
                            <th> Time </th>
                            <th> Venue </th>
                            <th> Paragraph</th>
                            <th> File Upload</th>
                            <th> Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->time }}</td>
                                <td>{{ $row->Venue }}</td>
                                <td>{{ $row->long_description }}</td>
                                <td>{{ $row->file_upload }}</td>
                                <td>
                                    @if ($row->image)
                                        <img src="{{ asset('backendsite/eventimg/' . $row->image) }}" alt="event-image"
                                            width="100">
                                    @else
                                        Image Not set
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('event.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('event.destroy', $row->id) }}" method="POST">
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
