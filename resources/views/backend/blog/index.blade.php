@extends('backend.layouts.master')
@section('title', 'All-Blog')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog List </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Blog List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blog</h3>
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('blog.create') }}" class="btn btn-info mb-3">Add Blog</a>

            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th> Title</th>
                        <th> Date</th>
                        <th> Short Description</th>
                        <th> Long Description</th>
                        <th> Quotation</th>
                        <th> Tags</th>
                        <th> Image</th>
                        <th> Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $key => $row)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $row->title }}</td>
                            @php
                                $created_at = explode(' ', $row->created_at);
                                $created_at = $created_at[0];
                            @endphp
                            <td>{{ $created_at }}</td>
                            <td>{{ $row->short_description }}</td>
                            <td>{{ $row->long_description }}</td>
                            <td>{{ $row->quotation }}</td>
                            <td>{{ $row->tags }}</td>
                            <td>
                                <img src="{{ asset('backendsite/blogimage/' . $row->image) }}" alt="Blog-image" width="100">
                            </td>
                            @php
                                $cat_id = $row->blog_cat_id;
                                $catdata = DB::table('blog_cats')->where('id', '=', $cat_id)->get();
                            @endphp
                            <td>{{ $catdata[0]->blog_cat_name }}</td>

                            <td>
                                <a href="{{ route('blog.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                        class="fas fa-edit"></i></a>

                                <form action="{{ route('blog.destroy', $row->id) }}" method="POST">
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
