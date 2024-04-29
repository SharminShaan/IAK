@extends('frontend.layouts.master')
@section('title', 'Profesional')
@section('content')

    <br>
    <section class="about-area-two">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="card-header">
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>

                <div class="col-md-5">
                    <h3 class="text-center"> Download Pdf Form </h3>
                    <hr>

                    <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <input type="hidden" class="form-control" name="type" value="5">
                            <input type="hidden" class="form-control" name="type_id" value="{{ $download->id }}">
                            <input type="hidden" class="form-control" name="type_name" value="{{ $download->title }}-download">

                            {{-- type, type_id, type_name, name, email, phone, address, image, doc_file, service_type, service_name --}}

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="name" class="col-form-label">Name:*</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="email" class="col-form-label">Email:*</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="phone" class="col-form-label">Phone Number:*</label>
                                    <input type="number" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="address" class="col-form-label">Address:</label>
                                    <textarea name="address" class="form-control" id="" cols="5" rows="3"></textarea>
                                </div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="cvfile" class="col-form-label">Attached:</label>
                                    <input type="file" id="cvfile" name="doc_file">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="image" class="col-form-label">Image:</label>
                                    <input type="file" id="image" name="image">
                                </div>
                            </div> <br> --}}


                            {{-- <div class="mb-1">
                                <label for="image" class="col-form-label">Service Type:</label>
                                <select name="service_name" id="">
                                    <option value="" selected disabled> Select One </option>
                                    <option value="Audit"> Audit </option>
                                    <option value="Tax"> Tax </option>
                                </select>
                            </div>

                            <div class="mb-1">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" name="message" id="message-text"></textarea>  <br>
                            </div> --}}

                            <div class="mb-1 text-center">
                                <br> <button type="submit" class=" btn btn-success">Send</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
@endsection
