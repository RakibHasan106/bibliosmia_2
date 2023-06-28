@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>Dashboard</h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Highlights</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Total Books</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">{{$book_count}}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Total Authors</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">{{$author_count}}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Total Publishers</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">{{$publisher_count}}</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Total Categories</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">{{$category_count}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection