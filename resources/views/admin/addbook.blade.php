@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Add Book</h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add A New Book</h5>
                        <small class="text-muted float-end">Input Information</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="Book_name"
                                        placeholder="Adventures of Huckleberry Finn" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Book Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Publisher</label>
                                <div class="col-sm-10">
                                    <select id="Publisher" class="form-select" name="Publisher">
                                        <option>Publishers</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="category" class="form-select" name="category">
                                        <option>Categories</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="Book_price"
                                        placeholder="price" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Publish Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="basic-default-name" name="Publish_date"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of Page</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="Page_No"
                                        placeholder="Page No." />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="book_description" id="" cols="" rows=""></textarea>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
