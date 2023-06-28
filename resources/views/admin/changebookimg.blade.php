@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>Change Book Img</h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Update Book Image</h5>
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
                        <form action="{{ route('updatebookimg') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="idstorage" value="{{$book_info->id}}">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Previous Image</label>
                                <div class="col-sm-10">
                                    <img src="{{asset($book_info->book_img)}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">New Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="book_img"/>
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
