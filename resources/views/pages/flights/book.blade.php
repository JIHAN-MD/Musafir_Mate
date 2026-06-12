@extends('layouts.app')

@section('content')
    <h1>Booking Flight</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Flight No: {{ $flight->flight_no }}</h5>

            @if($flight->destination)
                <p>Destination: {{ $flight->destination->name }}</p>
            @else
                <p>Destination not available</p>
            @endif

            <p>Price: RM{{ $flight->price }}</p>

            <!-- Booking Form (POST request on form submission) -->
            <form action="{{ route('flights.book.submit', ['flight_id' => $flight->flight_id]) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="payment">Payment Information</label>
                    <input type="text" id="payment" name="payment" class="form-control" placeholder="Credit Card / PayPal" required>
                </div>

                <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </form>
        </div>
    </div>
@endsection
