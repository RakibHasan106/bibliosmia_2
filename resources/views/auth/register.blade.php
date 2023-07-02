@extends('user.layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/register.css">
@endsection
@section('content')
    <br><br><br><br><br><br>
    <div style="display:flex;justify-content:center">
        <div class="register-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="register-label">{{ __('Name') }}</label>
                    <input id="name" class="register-input" type="text" name="name" value="{{ old('name') }}"
                        required autofocus autocomplete="name" />
                    <div class="register-error">
                        @foreach ($errors->get('name') as $message)
                            {{ $message }}
                        @endforeach
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="register-label">{{ __('Email') }}</label>
                    <input id="email" class="register-input" type="email" name="email" value="{{ old('email') }}"
                        required autocomplete="username" />
                    <div class="register-error">
                        @foreach ($errors->get('email') as $message)
                            {{ $message }}
                        @endforeach
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="register-label">{{ __('Password') }}</label>
                    <input id="password" class="register-input" type="password" name="password" required
                        autocomplete="new-password" />
                    <div class="register-error">
                        @foreach ($errors->get('password') as $message)
                            {{ $message }}
                        @endforeach
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="register-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="register-input" type="password" name="password_confirmation"
                        required autocomplete="new-password" />
                    <div class="register-error">
                        @foreach ($errors->get('password_confirmation') as $message)
                            {{ $message }}
                        @endforeach
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="register-link" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="register-button">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <br><br><br><br>
@endsection
