@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/accountdashboardstyle.css">
@endsection
@section('content')
    <div class="dashboard">
        <h1>Account Dashboard</h1>
        <div>
            <div class="dashboard-menu">
                <ul>
                    <li class="active"><a href="#account-info">Account Info</a></li>
                    <li><a href="#account-orders">Account Orders</a></li>
                </ul>
            </div>
            <div class="dashboard-content">
                <div id="account-info">
                    <!-- Content for Account Info section goes here -->
                    <h2>Account Info</h2>
                    <p><b>Name</b> - {{ $user_info->name }}</p>
                    <p><b>email</b> - {{ $user_info->email }} </p>
                    <p><b>Account created at</b> - {{ $user_info->created_at }}</p>
                </div>
                <div id="account-orders">
                    <!-- Content for Account Orders section goes here -->
                    <h2>Account Orders</h2>
                    <table>
                        <tr>
                            <th>Order id</th>
                            <th>Book Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>status</th>
                        </tr>
                        @foreach ($orders as $order)
                            <tr>
                                @php
                                    $book_name = App\Models\Book::where('id', $order->book_id)->value('book_name');
                                    if ($order->status === 'pending') {
                                        $color = '#F7CB73';
                                    } elseif ($order->status === 'approved') {
                                        $color = '#A2FF86';
                                    } elseif ($order->status === 'completed') {
                                        $color = 'green';
                                    } elseif ($order->status === 'cancelled') {
                                        $color = 'red';
                                    }
                                @endphp
                                <td>{{ $order->id }}</td>
                                <td>{{ $book_name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td style="background:{{$color}};color:whitesmoke">{{ $order->status }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


    <br><br>
@endsection
