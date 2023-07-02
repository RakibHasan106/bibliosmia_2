@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')
    <br><br><br><br><br><br><br>
    <div style="display:flex;justify-content:center">
        <div class="guest-layout">
            <!-- Session Status -->
            @if (session('status'))
                <div class="session-status mb-4">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="username" />
                    @if ($errors->has('email'))
                        <span class="input-error">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-input" type="password" name="password" required
                        autocomplete="current-password" />
                    @if ($errors->has('password'))
                        <span class="input-error">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="form-group mt-4">
                    <label for="remember_me" class="remember-me-label">
                        <input id="remember_me" type="checkbox" class="remember-me-checkbox" name="remember">
                        <span class="remember-me-text">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-group login-actions">
                    @if (Route::has('password.request'))
                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="login-button">{{ __('Log in') }}</button>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>
@endsection
