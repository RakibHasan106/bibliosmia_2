@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/loginstyle.css">
@endsection

@section('content')
    {{-- <script>alert("success!");</script> --}}

    <!-- LOGIN BOX -->
    <form method="POST">
        @csrf
        <div style="display:flex;justify-content: center;align-items: center;">
            <div class="loginbox">
                <div style="display:flex;justify-content: space-between;">
                    <h2>Log In</h2>
                    <h3><a href="./signup.html">New Here?</a></h3>
                </div>
                <br>
                <div style="display:flex;flex-direction:column;align-items: center;">
                    <input type="email" placeholder="Email Address" name="mail" required>
                    <input type="password" placeholder="Password" name="password" required>
                    @if (session('fail'))
                        <label style="color:red;font-weight:bold;">Invalid mail or password</label>
                    @endif
                    <button type="submit" value="submit">submit</button>

                    <h4><a href="#">Forget password?</a></h4>
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
