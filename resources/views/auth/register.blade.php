@extends('layouts.custom-login')

@section('content')
    <div class="login-container">
        <div class="login-card">
            <h2 class="text-center mb-6">{{ __('Register') }}</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Name') }}</label>
                    <input id="name" class="register-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email') }}</label>
                    <input id="email" class="register-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                    <input id="password" class="register-input" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="register-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Terms and Privacy Policy Link (optional) -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input id="terms" type="checkbox" name="terms" required class="form-check-input">
                            <label for="terms" class="text-sm text-gray-600">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="flex items-center justify-between mt-4">
                    <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="register-button">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
