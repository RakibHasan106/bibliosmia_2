@extends('admin.layouts.template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span>Approved Orders</h4>
        <div class="card">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <h5 class="card-header">All Approved Orders</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>User ID</th>
                            <th>Shipping Information</th>
                            <th>Book ID</th>
                            <th>Book Name</th>
                            <th>Book Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($approved_orders as $approved_order)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $approved_order->user_id }}</strong>
                                </td>
                                <td>
                                    <ul>
                                        <li><b>Name</b>-{{ $approved_order->user_name }}</li>
                                        <li><b>Phone no</b>-{{ $approved_order->phone_number }}</li>
                                        <li><b>Address</b>-{{ $approved_order->shipping_address }}</li>
                                        <li><b>Postal Code</b>-{{ $approved_order->postal_code }}</li>
                                    </ul>
                                </td>
                                <td>{{ $approved_order->book_id }}</td>
                                <td>{{ App\Models\Book::where('id',$approved_order->book_id)->get()->value('book_name') }}</td>
                                <td><span class="badge bg-label-primary me-1">
                                        {{ $approved_order->quantity }}</span></td>
                                <td>{{ $approved_order->total_price }}</td>
                                <td>{{ $approved_order->status }}</td>
                                <td>
                                    <a href="{{route('completeorder',$approved_order->id)}}" class="btn btn-primary">Mark As Completed</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
