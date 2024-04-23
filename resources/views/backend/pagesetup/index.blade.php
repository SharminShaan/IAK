@extends('backend.layouts.master')
@section('title', 'All-Page Setup')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Page Setup </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Page Setup</li>
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
            <a href="{{ route('pagesetup.create') }}" class="btn btn-info mb-3">Add Page Setup</a>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th> Title </th>
                            <th> Shor Description</th>
                            <th> Category</th>
                            <th> Sub Page</th>
                            <th> Image</th>
                            <th> Image 02</th>
                            <th> Image 03</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- // category_id, subcats_id, title, short_description,image,image2,image3, --}}

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->short_description }}</td>

                                @php
                                    $category_id = $row->category_id;
                                    $catdata = DB::table('categories')->where('id', '=', $category_id)->get();
                                @endphp
                                <td>{{ $catdata[0]->category_name }}</td>

                                @php
                                    $subcat_id = $row->subcats_id;
                                    $catdata = DB::table('sub_categories')->where('id', '=', $subcat_id)->get();
                                @endphp
                                <td>{{ $catdata[0]->sub_cat_name }}</td>

                                <td>
                                    @if ($row->image)
                                        <img src="{{ asset('backendsite/pagesetupimg/' . $row->image) }}" alt="Image"
                                            width="100">
                                    @else
                                        Image Not set
                                    @endif
                                </td>
                                <td>
                                    @if ($row->image2)
                                        <img src="{{ asset('backendsite/pagesetupimg/' . $row->image2) }}" alt="image"
                                            width="100">
                                    @else
                                        Image Not set
                                    @endif
                                </td>

                                <td>
                                    @if ($row->image3)
                                        <img src="{{ asset('backendsite/pagesetupimg/' . $row->image3) }}" alt="image"
                                            width="100">
                                    @else
                                        Image Not set
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('pagesetup.edit', $row->id) }}" class="btn btn-info btn-sm edit"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('pagesetup.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a>
                                            <button onclick="alert('Do You Want to Delete?')" type="submit"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                    </form>


                                </td>
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
