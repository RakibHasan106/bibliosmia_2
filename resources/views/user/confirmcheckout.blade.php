@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/confirmcheckoutstyle.css">
@endsection
@section('content')
    <div style="display: flex;align-items:center;flex-direction:column">
        <h1 style="color:#016664">Final Step to Place Your Order</h1>
        <div style='display:flex;justify-content:space-around;'>
            <div class="shipping-info">
                <h3>Your Books will be sent at - </h3>
                <p><b>Name:</b> {{ Auth::user()->name }}</p>
                <p><b>Mobile No:</b> {{ $phone_number }}</p>
                <p><b>Address:</b> {{ $full_address }}</p>
                <p><b>Postal Code:</b> {{ $postal_code }}</p>
            </div>
            @php
                $cart_items = App\Models\Cart::where('user_id',Auth::id())->get();
                $total_price=0;
            @endphp
            <div class="cart-info">
                <h3> Your Ordered Books </h3>
                <table>
                    <tr>
                        <th>Book</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    @foreach($cart_items as $cart_item)
                    <tr>
                        <td>{{App\Models\Book::where('id',$cart_item->book_id)->value('book_name')}}</td>
                        <td>{{$cart_item->quantity}}</td>
                        <td>{{$cart_item->price}}</td>
                        @php
                            $total_price+=$cart_item->price;
                        @endphp
                    </tr>
                    @endforeach
                    <tr style="border-top:5px solid black;">
                        <td><b>Total</b></td>
                        <td></td>
                        <td><b>{{$total_price}}</b></td>
                    </tr>
                </table>
                
            </div>
        </div>
        <br><br>
        <form action="{{route('confirmorder')}}" method="POST">
            @csrf
            <input type="hidden" name="phone_number" value="{{$phone_number}}">
            <input type="hidden" name="full_address" value="{{$full_address}}">
            <input type="hidden" name="postal_code" value="{{$postal_code}}">
            <input type="submit" class="btn btn-primary" value="Confirm Order"> 
        </form>
        <br>
        <form action="{{route('cartpageview')}}" method="GET">
            <input type="submit" class="btn btn-danger" value="Cancel">
        </form>
    </div>
    
    <br><br>
@endsection
