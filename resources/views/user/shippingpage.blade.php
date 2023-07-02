@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/shippingpagestyle.css">
@endsection
@section('content')
    <br><br>
    <div class="box">
        
        <div class="form-container">
            <div style="display: flex; justify-content:center">
                <b><h2 style="color:#005957">Provide Your Shipping Information</h2></b>
            </div>
            <br><br>
            <form action="{{route('confirmcheckout')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Phone Number</label><br><br>
                    <input type="text" class="form-control" placeholder="phone number" name="phone_number">
                </div>
                <div class="form-group">
                    <label>Full Address</label><br><br>
                    <input type="text" class="form-control" placeholder="Where you want to receive your books"
                        name="full_address">
                </div>
                <div class="form-group">
                    <label>Postal Code</label><br><br>
                    <input type="text" class="form-control" placeholder="postal code" name="postal_code">
                </div>
                
                <input type="submit" class="btn btn0" value="next">
            </form>
        </div>
    </div>
    <br><br><br>
@endsection
