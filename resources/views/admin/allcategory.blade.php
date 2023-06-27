@extends('admin.layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Categories</h4>
        <div class="card">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session() -> get('message') }}
                </div>
            @endif
            <h5 class="card-header">All Categories</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>No. of Books</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($categories as $category)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
                                <strong>{{ $category -> id }}</strong></td>
                            <td>{{$category->category_name}}</td>
                            <td><span class="badge bg-label-primary me-1">
                                {{$category->product_count}}</span></td>
                            <td>
                                <a href="{{route('editcategory',$category->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deletecategory',$category->id)}}" class="btn btn-secondary">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
