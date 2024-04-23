@extends('backend.layouts.master')
@section('title', 'All-Service')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Service Contents </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Service Contents</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Service Contents</h3>
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('servicecon.create') }}" class="btn btn-info mb-3">Add Service Contents</a>

            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th> Service Name</th>
                        <th> Link</th>
                        <th> Logo</th>
                        <th> Sub Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->link }}</td>
                            <td>
                                @if ($row->logo)
                                    <img src="{{ asset('backendsite/servicelogo/' . $row->logo) }}" alt="service-logo"
                                        width="100">
                                @else
                                    Logo Not set
                                @endif
                            </td>

                            @php
                                $subcat_id = $row->subcats_id;
                                $catdata = DB::table('sub_categories')->where('id', '=', $subcat_id)->get();
                            @endphp
                            <td>{{ $catdata[0]->sub_cat_name }}</td>

                            <td>
                                <a href="{{ route('servicecon.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                        class="fas fa-edit"></i></a>

                                <form action="{{ route('servicecon.destroy', $row->id) }}" method="POST">
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
        <!-- /.card-body -->
    </div>
@endsection
