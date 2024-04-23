@extends('backend.layouts.master')
@section('title', 'All Subscriber')
@section('content')
    <div class="card-body">
        <h3 class="mb-3">All Subscriber</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Subscriber Email</th>
                    <th>Subscriber Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
