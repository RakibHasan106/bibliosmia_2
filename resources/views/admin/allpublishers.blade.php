@extends('admin.layouts.template')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Publishers</h4>
    <div class="card">
        <h5 class="card-header">All Publishers</h5>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Publisher Name</th>
                        <th>No. of Books</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($publishers as $publisher)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{$publisher->id}}</strong></td>
                        <td>{{$publisher->publisher_name}}</td>
                        <td><span class="badge bg-label-primary me-1">
                            {{$publisher->publisher_count}}</span></td>
                        <td>
                            <a href="{{route('editpublisher',$publisher->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('deletepublisher',$publisher->id)}}" class="btn btn-secondary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection