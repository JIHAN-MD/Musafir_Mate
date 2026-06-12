@extends('layouts.custom-login')

@section('content')
    <div class="login-container">
        <div class="login-card">
            <h2 class="text-center mb-6">{{ __('Forgot Your Password?') }}</h2>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" required autofocus
                           class="forgot-input" value="{{ old('email') }}">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit"
                            class="forgot-button">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
