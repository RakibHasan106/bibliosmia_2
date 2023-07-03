@extends('admin.layouts.template')
@section('content')
    <div class="row">
        <!-- Basic Layout -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>Add Book</h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add A New Book</h5>
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
                        <form action="{{ route('storebook') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="book_name"
                                        placeholder="Adventures of Huckleberry Finn" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Book Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="book_img" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <select id="Publisher" class="form-select" name="author_id">
                                        @foreach ($authors as $author)
                                            <option value="{{$author->id}}">{{ $author->author_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Publisher</label>
                                <div class="col-sm-10">
                                    <select id="Publisher" class="form-select" name="book_publisher_id">
                                        @foreach ($publishers as $publisher)
                                            <option value="{{$publisher->id}}">{{ $publisher->publisher_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="category" class="form-select" name="book_category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="price"
                                        placeholder="price" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="quantity"
                                        placeholder="stock of the book" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Publish Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="basic-default-name"
                                        name="book_publish_date" placeholder="" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Number of Page</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="basic-default-name" name="book_page_no"
                                        placeholder="Page No." />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Book Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="book_tag"
                                        placeholder="example: bestseller, newreleased etc." />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="book_description" id="" cols="" rows=""
                                        placeholder="Book Synopsis"></textarea>
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
