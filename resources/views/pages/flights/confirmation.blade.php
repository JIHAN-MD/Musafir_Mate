@extends('layouts.app')

@section('content')
    <h1>Booking Confirmed</h1>
    <p>Thank you for booking with us. We will send you a confirmation email shortly.</p>
    <br>
    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
@endsection
