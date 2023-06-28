@extends('admin.layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>All Books</h4>
        <div class="card">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h5 class="card-header">Books</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Img</th>
                            <th>Publisher</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($books as $book)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $book->id }}</strong>
                                </td>
                                <td>{{ $book->book_name }}</td>
                                <td><img src="/{{$book->book_img}}" style="height:100px"> <br>
                                    <a href="{{route('changebookimg',$book->id)}}" 
                                        class="btn btn-primary" style="margin-top: 10px">Change</a>
                                </td>
                                <td>{{ $book->book_publisher_name }}</td>
                                <td>{{ $book->book_category_name }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->quantity }}
                                <td>
                                    <a href="{{route('editbook',$book->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('deletebook',$book->id)}}" class="btn btn-secondary">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
