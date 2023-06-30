@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/signupstyle.css">
@endsection

@section('content')
    <!-- SIGNUP -->
    <form method="POST">
        @csrf
        <div style="display:flex;justify-content: center;align-items: center;">
            <div class="signupbox">
                @if (session('success'))
                    <div style="display: flex;justify-content:center">
                        <h2 style="color: rgb(5, 189, 5)">registration successfull! </h1>
                    </div>
                    {{ Session::forget('success') }}
                @endif
                @if (session('fail'))
                    <div style="display: flex;justify-content:center">
                        <h2 style="color: rgb(189, 5, 5)">{{ session('fail') }} </h1>
                    </div>
                    {{ Session::forget('fail') }}
                @endif
                <h2 style="display:flex;justify-content: center">Create An Account</h2>
                <!-- <h3><a href="./signup.html">New Here?</a></h3> -->
                <br>
                <div style="display:flex;flex-direction:column;align-items: center;">
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="Email Address" name="mail">
                    <input type="password" placeholder="Password" name="password">

                    <button type="submit" value="submit">Create Account</button>

                    <p>BiblioSmia uses your personal information to create your account,
                        communicate with you, process your transactions with us, and provide you
                        with our products and services.
                        By continuing, you agree to our <a href="#" style="color:blue">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
@endsection
