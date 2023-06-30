@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/cartstyle.css">
@endsection
@section('content')
    <!-- Cart -->

    <div class="container">
        <div class="small-container">
          <table>
            <tr>
              <th>Book</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/All_the_Lights_We_Can't_See.jpg" alt="All_the_Lights_We_Can_not_see">
                  <div>
                    <p>All The Lights We Cannot See</p>
                    <small>Price: BDT.500.00</small> <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1" min="1"></td>
              <td>500.00</td>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/inferno.jpeg" alt="inferno">
                  <div>
                    <p>Inferno</p>
                    <small>Price: BDT.800.00</small> <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1" min="1"></td>
              <td>800.00</td>
            </tr>
            <tr>
              <td>
                <div class="cart-info">
                  <img src="images/great_expectations.jpeg" alt="great_expectations">
                  <div>
                    <p>Great Expectations</p>
                    <small>Price: BDT.550.00</small> <br>
                    <a href="">Remove</a>
                  </div>
                </div>
              </td>
              <td><input type="number" value="1" min="1"></td>
              <td>550.00</td>
            </tr>
          </table>
          <div class="total-price">
            <table>
              <tbody>
                <tr>
                  <td>Subtotal</td>
                  <td>1850.00 TK</td>
                </tr>
                <tr>
                  <td>Discount</td>
                  <td>-100.00 TK</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>1750.00 TK</td>
                </tr>
                <tr>
                  <td> </td>
                  <td><a href="#"><button>Checkout</button></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection
