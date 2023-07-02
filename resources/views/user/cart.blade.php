@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/cartstyle.css">
    <style>
        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
@endsection
@section('content')
    <!-- Cart -->

    <div class="container">
        <div class="small-container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <tr>
                    <th>Book</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                @php
                    $total_price = 0;
                @endphp
                @foreach ($cart_items as $cart_item)
                    @php
                        $book_info = App\Models\Book::where('id', $cart_item->book_id)->first();
                    @endphp
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="/{{ $book_info->book_img }}" alt="Img not found">
                                <div>
                                    <a href="{{ route('bookpage', [$book_info->id, $book_info->slug]) }}">
                                        <p>{{ $book_info->book_name }}</p>
                                    </a>
                                    <small>Price: BDT.{{ $book_info->price }}</small> <br>
                                    <form action="{{ route('removefromcart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $cart_item->id }}" name="cart_id">
                                        <input type="hidden" value="{{ $book_info->id }}" name="book_id">
                                        <button type="submit">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>{{ $cart_item->quantity }}</td>
                        <td>{{ $cart_item->price }}</td>
                    </tr>
                    @php
                        $total_price += $cart_item->price;
                    @endphp
                @endforeach

            </table>
            @if ($total_price === 0)
                <h3 style="text-align:center">
                    Cart is Empty . <a href="/" class="cart-add-some-product">Add Some Products</a>
                </h3>
            @else
                <div class="total-price">

                    <table>
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>{{ $total_price }} TK</td>
                            </tr>
                            {{-- <tr>
                            <td>Discount</td>
                            <td>-100.00 TK</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>1750.00 TK</td>
                        </tr> --}}
                            <tr>
                                <td> </td>
                                <td>
                                    <a href="{{ route('shippingpage') }}">
                                        <button>Checkout</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
