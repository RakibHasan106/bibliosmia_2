@extends('admin.layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>All Authors</h4>
        <div class="card">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session() -> get('message') }}
                </div>
            @endif
            <h5 class="card-header">Authors</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Author Name</th>
                            <th>No. of Books</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($authors as $author)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
                                <strong>{{ $author -> id }}</strong></td>
                            <td>{{$author->author_name}}</td>
                            <td><span class="badge bg-label-primary me-1">
                                {{$author->book_count}}</span></td>
                            <td>
                                <a href="{{route('editauthor',$author->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deleteauthor',$author->id)}}" class="btn btn-secondary">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
