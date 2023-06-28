@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>Edit Book</h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Book</h5>
                        <small class="text-muted float-end">Input Information</small>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('updatebook') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$book_info->id}}" name="idstorage">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="book_name"
                                        value="{{$book_info->book_name}}"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="price"
                                        value="{{$book_info->price}}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="quantity"
                                    value="{{$book_info->quantity}}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Publish Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="basic-default-name"
                                        name="book_publish_date" value="{{$book_info->book_publish_date}}"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of Page</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="book_page_no"
                                    value="{{$book_info->book_page_no}}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="book_description" cols="" rows=""
                                    >{{$book_info->book_description}}</textarea>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
