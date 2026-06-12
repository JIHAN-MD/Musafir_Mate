@extends('layouts.custom-login')

@section('content')
    <div class="login-container">
        <div class="login-card">
            <h2 class="text-center mb-6">{{ __('Confirm Your Password') }}</h2>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" autofocus
                           class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit"
                            class="bg-indigo-600 text-white py-2 px-6 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
